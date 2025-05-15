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

$vol = $liaison->query("SELECT idvol, statut, destinationvol, datedepart, datearrivee, aeroport_de_depart FROM vols ");
$idvol = $liaison->query("SELECT idvol FROM vols;");


?>