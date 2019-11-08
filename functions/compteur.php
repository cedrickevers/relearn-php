<?php
function ajouter_vue()  : void {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPRATOR . "compteur
    ";
    $fichier_journalier = $fichier . "-" . date("y-m-d");
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);

}

function incrementer_compteur(string $fichier): void {
  $compteur = 1;
  if(file_exists($fichier)) {
    $compteur = (int) file_get_contents($fichier);
    $compteur++;
  }
} 

function nombres_vues() :string {
  $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "compteur";
  return file_get_contents($fichiers);
}