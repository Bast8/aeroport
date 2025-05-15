<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$liaison = new mysqli("localhost", "root", "", "aéroport");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$identifiant = $_POST["id"];

$id = $liaison->query("SELECT `mdpcompte` FROM `acount` WHERE identifiantcompte = '$identifiant' ;");
$row = mysqli_fetch_array($id);
  


?>