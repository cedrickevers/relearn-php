<?php

$classe = [
  [  "nom"=>"jean",
    "prenom"=>"charles",
    "notes"=>[1,2,3],

  ],
  [
    "nom"=>"David",
    "prenom"=>"chrly",
    "notes"=>[2,4,8]

  ]
  ];

echo $classe[1]["notes"][1];