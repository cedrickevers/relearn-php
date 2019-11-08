<?php
$nom = null;

if(!empty($_GET['action']) && $_GET["action"] ==="deconnecter") {
    unset($_COOKIE["utilisateur"]);
    setcookie("utilisateur", "", time( - 10));
} 
if(!empty($_COOKIE["utilisateur"])){
    $nom = $_COOKIE["utilisateur"];
}
if(!empty($_POST["nom"])){
    setcookie("utilisateur", $_POST["nom"]);
    $nom = $_POST["nom"];
}
 
?>
<?php if ($nom) : ?>
<h1>bonjour <?= htmlentities($nom) ?></h1>
<a href="profile.php?action=deconnecter"> Se deco</a>
<?php else: ?>
<form action="" method="post">
<div class="form-group">
    <input type="text" class="form-control" name="nom" placeholder="entrez votre nom">
    <button class="btn btn-primary">Se connecter</button>
</div>
<?php endif; ?>

</form>
<style>
   form, .row, .col-md-8 {margin-top:10rem;}
    </style>