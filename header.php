<?php 
function nav_item(string $lien, string $titre) : string {

    $classe = "nav-item";
    if($_SERVER['SCRIPT_NAME'] === $lien){
        $classe = $classe . ' active';
    }
    return <<<HTML
    <li class="$classe">
        <a class="nav-link" href="$lien">$titre</a>
    </li>    
HTML;        
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php $showTitle = isset($title)? $title: "mon site"; echo $showTitle;   ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Mon site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <?= nav_item("/index.php", "Accueil");?>
      <?= nav_item("/contact.php", "contact");?>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
