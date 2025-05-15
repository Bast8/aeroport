<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <link rel="stylesheet" href="CSSindex.css" type="text/css"
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table class="table table-striped">
            <thead class="thead-dark">
		<tr>
		<th scope="col">idvol</th>
                <th scope="col">statut</th>
                <th scope="col">destination</th>
                <th scope="col">Date de Départ</th>
                <th scope="col">Date d'arrivée</th>
                <th scope="col">Provenance</th>
		</tr>
            </thead>
            <tbody>
        <?php
            include_once(".\Tableau.php");
            foreach($vol as $desvol){
                echo '<tr>
            <td>'.$desvol["idvol"].'</td>
            <td>'.$desvol["statut"].'</td>
            <td>'.$desvol["destinationvol"].'</td>
            <td>'.$desvol["datedepart"].'</td>
            <td>'.$desvol["datearrivee"].'</td>
            <td>'.$desvol["aeroport_de_depart"].'</td>
                    </tr>';
            }
        ?>
            </tbody>
        </table>
    </body>
</html>
