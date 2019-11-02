<?php

$mot = readline("Veuillez entrer un mot ");

$reverse = strrev($mot);

$paylindrom = $reverse=== $mot ? "ok": "bo";

echo $paylindrom;


