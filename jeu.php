<?php
//DECLARATION
$aDeviner = 150;
$erreur = null;
$succes = null;
?>
<?php
//Starting conditions

if(isset($_GET["chiffre"])) {
     if($_GET["chiffre"] > $deviner){
         $erreurr = "trop Grand"; 
     }
     elseif($_GET["chiffre"] < $aDeviner){
         $erreur ="Votre chiffre est trop etit";
     }
     else{
         $succes ="GG vous avez trouvez le bon nombre <strong>$aDeviner</strong>";
     }
     $value = $GET_["chiffre"];

 }
?>

<?php 
//conditions résults

if($erreur):?>
 <div class="alert alert-danger">
    <? $erreur?>
 </div>
 <?php elseif ($succes): ?>
 <div class="alert alert-sucess">
    <?$succes?>
 </div>
 <?php endif?>



 <form action="/jeu.php" method="GET">
<input type="number" name="chiffre" placeholder = "entre 0 et 1000" value="<?php htmlentities($value) ?>">
<button type ="submit">Deviner</button>
</form>

<style>
body{
    background-color:steelblue;
} 
 </style>



 