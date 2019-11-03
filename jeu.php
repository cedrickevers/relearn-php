<?php
$aDeviner= 150;
$test =$_GET["chiffre"];
 ?>

<?php if($test> $aDeviner):?>
 trop grand
<?php elseif($test< $aDeviner):?>
trop petit
<?php else: ?>
Bravo
<?php endif ?>

<form action="/jeu.php" method="GET">
<input type="number" name="chiffre" placeholder = "entre 0 et 1000" value="<?php htmlentities($test) ?>">
<button type ="submit">Deviner</button>
</form>

<?php require ("footer.Php");
