<?php
include "top.php";

$sql = 'SELECT pmkPhotoID, fldPhotoDate, fldName, fldImgName, fldCategory, fldPhotoDescription ';
$sql .= 'FROM tblLandscapes WHERE fldCategory LIKE "Landscape"';

$photos = '';
$statement = $pdo->prepare($sql);
$statement->execute();
$photos = $statement->fetchAll();
?>

   <h2 class = "photopageheadings">Calebs Landscape Photos</h2>
   <p class = "cantread">Click on each photo for more information!</p>
   <div class = "photo-container">
   <?php


if (is_array($photos)) {
    foreach ($photos as $photo) {
        print '<div class="photo-item">';
        print '<a href="displayPhoto.php?aid=' . $photo['pmkPhotoID'] . '">';
        print '<figure class="photo-container">';
        print '<img alt="' . $photo['fldName'] . '" src="images/' . $photo['fldImgName'] . '">';
        print '<figcaption>' . $photo['fldName'] . '</figcaption>';
        print '</figure>';
        print '</a>';
        print '</div>';
    }
}
?>

<?php
include 'footer.php';
?>
</html>







