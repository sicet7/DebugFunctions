<?php
//created by Martin René Sørensen aka. Sicet7
// Functions.php - 22:43 2015/06/03
//for DebugFunctions

function vds($item){//var dumb string
    ob_start();
    var_dump($item);
    $result = ob_get_clean();
    return $result;
}

function dvd(){//die var dumb
    $args = func_get_args();
    $string = '';
    foreach($args as $variable){
        $string .= vds($variable);
    }
    die('<pre>'.$string);
}
