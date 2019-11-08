</main>
<div class="row">

    <div class="col-md-4">
    <?php 
    require_once dirname(__DIR__) . DIRECTORY_SEPRATOR . "functions" . DIRECTORY_SEPRATOR . "compteur.php";
    ?>
     il a nombre de  <?= nombres_vues() ?> sur le site
    </div>   
    <div class="col-md-4"></div>   
    <div class="col-md-4">
    <h5>Navigation</h5>    
        <ul class="list-unstyled text-small">
        <?php require("menu.php")?>

        </ul>
    </div>   
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


 <?php
 require 'header.php';
 $erreur = null;
 $succes = null;
 ?>
 <?php if($erreur):?>
 <div class="alert alert-danger">
    <? $erreur?>
 </div>
 <?php elseif ($succes): ?>
 <div class="alert alert-sucess">
    <?$succes?>
 </div>
 <?php endif?>
 <?php return $erreur;?>


<form action="/jeu.php" method="GET">
<input type="number" name="chiffre" placeholder = "entre 0 et 1000" value="<?php htmlentities($test) ?>">
<button type ="submit">Deviner</button>
</form>




<style>
.row{
    margin-top : 15rem;
}
</style>