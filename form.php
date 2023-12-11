<?php
include 'top.php';
?>
<figure>
        <img id= "image" alt="Example of a no mow lawn alternative!" src="images/Muckler-Midterm-4.png">
</figure>
<section>
<form class="form" action="#" method="POST">
    <p>Contact Information</p>
    <p>
        <input type="text" name="txtfirstname" id="first" placeholder="Johnny" required>
        <label for="first">First Name:</label>
</p>
<p>
    <input type="text" name="txtlastname" id="last" placeholder="Appleseed" required>
    <label for="last">Last Name:</label>
</p>
<p>
    <input type="text" name="txtemail" id="email" placeholder="JohnnyAppleseed@gmail.com" required>
    <label for="email">Email:</label>
<p>Where are you looking to have your shoot?</p>
<p>
   <input type="checkbox" name="concern" value="1" id="studio">
   <label for="init">The studio</label>
</p>
<p>
   <input type="checkbox" name="concern" value="1" id="outdoors">
   <label for="aest">Outdoors</label>
</p>
<p>
   <input type="checkbox" name="concern" value="1" id="home">
   <label for="eff">My home</label>
</p>
<p>What are you looking for?</p>
<p>
    <input type="radio" name="consider" value="self" id="selfphoto">
    <label for="yes">Self portrait</label>
</p>
<p>
    <input type="radio" name="consider" value="couple" id="couplephoto">
    <label for="no">Couples Photoshoot</label>
</p>
<p>
    <input type="radio" name="consider" value="pet" id="petphoto">
    <label for="needmore">Pet Photography</label>
</p>
<p>
    <input class="submit" type="submit" value="submit">
</form>
<?php
$firstName = $lastName = $email = $concerns = $consideration = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<!-- Starting Sanitization -->';
$firstName = isset($_POST['txtfirstname']) ? htmlspecialchars($_POST['txtfirstname'], ENT_QUOTES, 'UTF-8') : '';
$lastName = isset($_POST['txtlastname']) ? htmlspecialchars($_POST['txtlastname'], ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['txtemail']) ? filter_var($_POST['txtemail'], FILTER_SANITIZE_EMAIL) : '';
$concern = isset($_POST['concern']) ? htmlspecialchars($_POST['concern'], ENT_QUOTES, 'UTF-8') : '';
$consideration = isset($_POST['consider']) ? htmlspecialchars($_POST['consider'], ENT_QUOTES, 'UTF-8') : '';

   /* $firstName = $_POST['txtfirstname'];
    $lastName = $_POST['txtlastname'];
    $email = $_POST['txtemail'];
    $reason = isset($_POST['consider']) ? $_POST['consider'] : '';
*/
echo "<!-- Starting Validation -->";
function verifyAlphaNum($testString) {
   // Check for letters, numbers and dash, period, space and single quote only.
   // Added & ; and # as a single quote sanitized with html entities will have
   // this in it bob's will become bob's
   return (preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
$firstName = $lastName = $email = $concerns = $consideration = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstName = $_POST['txtfirstname'];
   $lastName = $_POST['txtlastname'];
   $email = $_POST['txtemail'];
   $concerns = isset($_POST['concern']) ? $_POST['concern'] : [];
   $consideration = isset($_POST['consider']) ? $_POST['consider'] : '';
}
$firstName = filter_input(INPUT_POST, 'txtfirstname', FILTER_SANITIZE_STRING);
if (empty($firstName)) {
   echo "<!-- First Name is required. -->";
} elseif (!verifyAlphaNum($firstName)) {
   echo "<!-- Invalid characters in First Name. -->";
}
$lastName = filter_input(INPUT_POST, 'txtlastname', FILTER_SANITIZE_STRING);
if (empty($lastName)) {
   echo "<!-- Last Name is required. -->";
} elseif (!verifyAlphaNum($lastName)) {
   echo "<!-- Invalid characters in Last Name. -->";
}
$email = filter_input(INPUT_POST, 'txtemail', FILTER_VALIDATE_EMAIL);
if (empty($email)) {
   echo "<!-- Valid email address is required. -->";
}
$concerns = filter_input(INPUT_POST, 'concern', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if (empty($concerns)) {
   echo "<!-- At least one concern must be selected. -->";
}
$consideration = filter_input(INPUT_POST, 'consider', FILTER_SANITIZE_STRING);
if (empty($consideration)) {
   echo "<!-- Consideration selection is required. -->";
}


$sql = '  INSERT INTO tblAltLawnSurvey
(fldFirstName, fldLastName, fldEMail, fldInvest, fldAesthetic, fldInfo, fldConcern)
VALUES (?, ?, ?, ?, ?, ?, ?)';
$statement= $pdo->prepare($sql);
$data = array($firstName, $lastName, $email, $invest, $aesthetic, $info, $concern);

echo "<!--Start Saving-->";
if($statement->execute($data)){
    $message= '<h2>Thank you</h2>';
    $message= '<p> Your information was successfully saved<p>';

} else{
    $message= '<p>ERROR: Record was NOT successfully saved.</p>';
    $dataIsGood= false;
}

}
echo '<section class="output">';
echo "<p>First Name: $firstName</p>";
echo "<p>Last Name: $lastName</p>";
echo "<p>Email: $email</p>";
echo "<p> Location: $concern</p>";
echo "<p>Consideration: $consideration</p>";
echo '"</section"' ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["txtemail"]; 

    $to = $email; 
    $subject = "Thank you for your interest in Caleb Muckler's work!";
    $body = "Dear $firstName,\n\nThank you for your interest in Caleb Muckler and his work! He'll get back to you shortly to discuss details for your shoot.\n\nBest regards,\nCaleb Muckler Team";

    $headers = "From: blinville504@gmail.com"; 

    if (mail($to, $subject, $body, $headers)) {
        $thank_you_message = "Thank you for your interest! Caleb Muckler's team will get back to you shortly.";
    } else {
        $thank_you_message = "Failed to send acknowledgment email. Please try again later.";
    }

    echo "<p>$thank_you_message</p>";
}

?>
</main>
<?php
include 'footer.php';
?>

</html>






