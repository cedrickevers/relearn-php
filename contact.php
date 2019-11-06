<?php
 $title = 'Nous contacter';
 require_once "config.php";
 require_once "functions.php";
$creneaux =  creneaux_html(CRENEAUX);
 
 
?>

<div class="row">
    <div class="col-md-8">
    <h2>Nous contacter</h2>
    <p>Lorem ipsum sit amet consecteur </p>
    <div class="col-md-4">
        <h2> Horaires d 'ouverture'</h2>
        <?= $creneaux?>
    </div>
    </div>
</div>
  
  
<?php require_once("footer.php");
?>

<style>
    .row, .col-md-8 {margin-top:10rem;}
    </style>