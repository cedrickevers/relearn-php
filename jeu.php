<?php
 $aDeviner = 150;
 $erreur = null;
 $succes = null;
 $value;
 if(isset($_GET["chiffre"])) {
     if($_GET["chiffre"] > $deviner){
         $erreurr = "trop Grand"; 
     }
     elseif($_GEt["chiffre"] < $aDeviner){
         $erreur ="Votre chiffre est trop etit";
     }
     else{
         $succes ="GG vous avez trouvez le bon nombre <strong>$aDeviner</strong>";
     }
     $value = (int)$_GEt("chiffre");
 }
 ?>
 <?php if($erreur):?>
 <div class="alert alert-danger">

<form action="/jeu.php" method="GET">
<?php return $error;?>
<input type="number" name="chiffre" placeholder = "entre 0 et 1000" value="<?php htmlentities($test) ?>">
<button type ="submit">Deviner</button>
</form>


 