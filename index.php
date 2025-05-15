<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <link rel="stylesheet" href="inscription.css" type="text/css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

      <br>
      <br>
      <br>
      
        <a href="1erepage.php">1ere page</a>
    <form action="connexion2.php" method="post" class="form">
  <div class="form">
    <label for="name">entrez votre identifiant: </label>
    <input type="text" name="id" id="id" required />
  </div>
  <div class="form">
    <label for="mot de passe">Entrez votre mot de passe: </label>
    <input type="text" name="mdp" id="mdp" required />
  </div>
  <div class="form">
      <input name="boutton" type="submit" value="connexion" />
  </div>
    </form>
        <?php
                if(isset($_GET) && isset($_GET["loginfailed"])){
                    echo("login/mdp failed");
                }
                
                
                
        ?>
        
    </body>
</html>
