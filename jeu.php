
<?php
//DECLARATION
$aDeviner = 150;
$erreur = null;
$succes = null;
?>
<?php
//Starting conditions

if(isset($_GET["chiffre"])) {
     if($_GET["chiffre"] > $aDeviner){
         $erreur = "trop Grand"; 
     }
     elseif($_GET["chiffre"] < $aDeviner){
         $erreur ="Votre chiffre est trop etit";
     }
     else{
         $succes ="GG vous avez trouvez le bon nombre <strong>$aDeviner</strong>";
     }
     $value =(int) $GET_["chiffre"];

 }
?>
<?php 
//conditions résults
require "header.php";
if($erreur):?>
 <div class="alert alert-danger">
    <?= $erreur?>
 </div>
 <?php elseif ($succes): ?>
 <div class="alert alert-sucess">
    <?= $succes?>
     
 </div>
 <?php endif?>



 <form action="/jeu.php" method="GET">
    <div class="form-group">
    <input type="checkbox" name="parfum" value="Fraise"> Fraise <br/>
    <input type="checkbox" name="parfum" value="Vanille"> Vanille <br/>
    <input type="checkbox" name="parfum" value="Chocolat">chocolat <br/>
    </div>
</form>

<style>
.alert,form{
    margin-top:15rem;
}

</style>