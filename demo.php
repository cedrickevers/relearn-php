<?php

 $eleves = [
   "cm2" => ["Jean", "Marc", "Jane","Marion"],
   "cm1" =>["tekken", "Street"]

 ];

 foreach($eleves as $classe => $listEleves) {
   echo "la class $classe:\n";
    foreach($listEleves as $eleve){

      echo "- $eleve \n";
    } 
 }