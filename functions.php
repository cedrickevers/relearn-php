<?php

function checkbox (string $name, string $value, array $data): string{
    $attributes =""; 
    if( isset($data[$name]) &&  in_array($data_name)){
        $attributes = "checked";
    }
    return <<<HTML
        <input type="checkbox" name="{$name}[]" value="$value">
HTML;        
}


function radio (string $name, string $value, array $data): string{
    $attributes =""; 
    if( isset($data[$name]) &&  value === $data[$name]){
        $attributes = "checked";
    }
    return <<<HTML
        <input type="radio" name="{$name}" value="$value">
HTML;        
}

function dump( $variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

function creneaux_html(array $creneaux){

    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "de {$creneau[0]}h à {$creneau[1]}";

    }
    return implode(" et ", $phrases);
}
?>