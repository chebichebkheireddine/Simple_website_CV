<?php
function dd($value){
    var_dump($_SERVER);
    die();
   } 
function url($value){
    return $_SERVER['REQUEST_URI']===$value;
}

?>