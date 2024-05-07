<?php
include_once("controllerNasabah.php");
$cm= new ControllerNasabah();
echo "<hr>";
$cm->addRecord("001","Ali","ali@email.com","12345678");
$cm->addRecord("002","Budi","budi@email.com","09876543");
$cm->addRecord("003","Cecep","cecep@email.com","10293847");
echo "<hr>";
$cm->viewAllRecord();
echo "<hr>";
$cm->viewSingleRecord(2);
echo "<hr>";
$xnasabah = new nasabah("333","Cecep Update","c3c3p@email.com","01928374");
$cm->updateRecord(2,$xnasabah);
$cm->viewSingleRecord(2);
echo "<hr>";
?>
