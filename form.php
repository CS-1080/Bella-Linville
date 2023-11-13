<?php
include 'top.php';
?>
<figure>
        <img class="rounded" alt="Example of a no mow lawn alternative!" src="images/formphoto.png">
        <figcaption>An aesthetic, and fun, lawn alternative!</figcaption>
</figure>
<section>
    <?php
    print '<p>Post Array:</p><pre>';
    print_r($POST);
    print '</pre>';
    ?> 
<form action="#" method="POST">
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
<p>What's your biggest concern regarding switching your lawn?</p>
<p>
    <input type="checkbox" name="concern" value="1" id="init">
    <label for="init">Initial Investment</label>
</p>
<p>
    <input type="checkbox" name="concern" value="1" id="aest">
    <label for="aest">Aesthetic</label>
</p>
<p>
    <input type="checkbox" name="concern" value="1" id="eff">
    <label for="eff">Too much effort</label>
</p>
<p>Are you considering switching to an alternative lawn?</p>
<p>
    <input type="radio" name="consider" value="yes" id="yes">
    <label for="yes">Yes</label>
</p>
<p>
    <input type="radio" name="consider" value="no" id="no">
    <label for="no">No</label>
</p>
<p>
    <input type="radio" name="consider" value="needmoreinfo" id="needmore">
    <label for="needmore">Need more info</label>
</p>
<p>
    <input class="submit" type="submit" value="submit">
</form>
<?php 
echo '<!-- Starting Sanitization -->';
$firstName = isset($_POST['txtfirstname']) ? htmlspecialchars($_POST['txtfirstname'], ENT_QUOTES, 'UTF-8') : '';
$lastName = isset($_POST['txtlastname']) ? htmlspecialchars($_POST['txtlastname'], ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['txtemail']) ? filter_var($_POST['txtemail'], FILTER_SANITIZE_EMAIL) : '';
$concerns = isset($_POST['concern']) ? array_map('htmlspecialchars', $_POST['concern']) : [];
$consideration = isset($_POST['consider']) ? htmlspecialchars($_POST['consider'], ENT_QUOTES, 'UTF-8') : '';
echo "<p>Sanitized First Name: $firstName</p>";
echo "<p>Sanitized Last Name: $lastName</p>";
echo "<p>Sanitized Email: $email</p>";
echo "<p>Sanitized Concerns: " . implode(', ', $concerns) . "</p>";
echo "<p>Sanitized Consideration: $consideration</p>";
?>
<?php
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
?>
<?php
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
?>
<?php
include 'footer.php';
?>
</main>
</html>






