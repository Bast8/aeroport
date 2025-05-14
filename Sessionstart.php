<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$liaison = mysqli_connect ("@localhost","root","","aéroport");

$mdp = $liaison->query("SELECT mdpcompte FROM account WHERE identifiantcompte=".$_post["name"].";");

if