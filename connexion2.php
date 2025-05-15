
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

        <?php
        
        
        function login(){  
            include_once(".\BDD.php");
            
            if($row != null){
                foreach($row as $idrow){
                    if ($_POST["mdp"] ===  $idrow){
                        header('Location: .\1erepage.php');
                 
                    }
                    else {
 
                        header('Location: .\index.php'.'?loginfailed');
                    }

                }
            }
            else {
                header('Location: .\index.php'.'?loginfailed');
            }
            
            }
        
        login();
        
            

        ?>
 

