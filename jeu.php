

<?php

require_once "header.php";
require_once "functions.php";

$parfums = ["vanille" => 3, "chocolat" => 4, "pomme"=> 5];
$cornets = ["corner" => 1.5, "ravier" => 1];
$suplements = ["Granulé "=>0.5,  "chantilly"=> 5];
?>

<div class="row">

<div class="col-md-4">

</div>
<div class="col-md-8">

<form action="/jeu.php" method="GET">
    <div class="form-group">
   
    <?php foreach($parfums as $parfum => $prix) : ?>
            <div class="checkbox">
                <label>
                    <?= checkbox("parfum", $parfum, $_GET) ?>
                    <?= $parfum ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach ?>

            <?php foreach($cornets as $cornet => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <?= radio("cornet", $cornet, $_GET)?>
                        <?= $cornet ?> - <?= $prix ?> €
                        
                    </label>
                </div>

            <?php endforeach ?>

            <?php foreach($suplements as $suplement => $prix) : ?>
            <div class="checkbox">
                <label>
                    <?= checkbox("parfum", $suplement, $_GET) ?>
                    <?= $suplement ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach ?>


    <button type="submit" class="btn">TEST</button>
</form>
     </div>
</div>

     <?php echo "Le prix est de $prize;"?>
    
<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST) ?>
</pre>


<h2>$_get</h2>
<pre>
    <?php 
    var_dump($_GET)
    ?> 


<style>
.alert,form{
    margin-top:15rem;
}

</style>