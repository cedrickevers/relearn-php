<?php

$insults =["bite"," couilles","sexw"];
$phraseTest= " j'aime trop la bite, car j'en ai plein les couilles";
foreach($insults as $insult ){
  $taille = strlen($insult);
  $replace = str_repeat("*",strlen($insult));
$phraseTest =str_replace($insult,$replace ,$phraseTest);
  
}
echo $phraseTest;
