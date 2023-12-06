<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS1080 Labs: Bella Linville</title>
    <meta name="author" content= "Bella Linville">
    <meta name="description" content= "A portfolio of Caleb Mucklers photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>"type="text/css">
    <link rel="advancedstylesheet" href="css/layout-desktop.css?version=<?php print time(); ?>" type="text/css">
    <link href="css/layout-desktop.css?version=<?php print time (); ?>" rel="stylesheet" type="text/css">
    <link href="css/layout-tablet.css?version=<?php print time (); ?>" media="(max-width: 820px)" rel="stylesheet" text="text/css">
    <link href="css/layout-phone.css?version=<?php print time (); ?>" media="(max-width: 430px)" rel="stylesheet" type="text/css">
    </head>
    <?php
    print'<body class="' . $pathParts['filename'] . '">';
    print'<!--########### Start of Body Element ###########-->';
    include "database-connect.php";
    include "header.php";
    include "nav.php";
    ?>
