<!--Connecting-->
<?php
$databaseName= 'ILINVILL_labs';
$dsn = 'mysql:host=webd.uvm.edu;dbname=' . $databaseName;
$username = 'ilinvill_writer';
$password = 'H}2OIVwgbz<VP60I2am/';

$pdo= new PDO($dsn, $username, $password);
if($pdo) print '<!--Connection complete -->';
?>