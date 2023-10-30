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
include 'footer.php';
?>
</main>
</html>






