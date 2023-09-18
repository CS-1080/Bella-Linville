<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CS1080 Labs: Bella Linville</title>
    <meta name="author" content= "Bella Linville">
    <meta name="description" content= "A portfolio of all of my hard work in CS1080, my introduction to coding and the WWW">
    <link rel="stylesheet" href="css/custom.css?version=?php print time(); ?>" type="text/css">
<nav> 
    <a href="index.php">Home</a>
    <a href="detail.php">Detail</a>
    <a href="form.php">Form</a>
</nav>
<section>
    <?php
    print '<p>Post Array:</p><pre>';
    print_r($POST);
    print '</pre>';
    ?> 
<form action="#" method="POST">
    <p>Contact Information</p>
    <p>
        <input type="text" name="txtfirstname" id="first" placeholder="Johnny">
        <label for="first">First Name:</label>
</p>
<p>
    <input type="text" name="txtlastname" id="last" placeholder="Appleseed">
    <label for="last">Last Name:</label>
</p>
<p>
    <input type="text" name="txtemail" id="email" placeholder="JohnnyAppleseed@gmail.com">
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
    <input type="submit" value="submit">
</form>
<footer>
    <p></a href="../index.php">Site map (Main Index)</a></p>
</footer>
</main>
</html>






