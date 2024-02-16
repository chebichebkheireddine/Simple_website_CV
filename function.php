<?php
//function dump and die()
function dd($value){
    var_dump($value);// make it simple
    // var_dump($_SERVER);// Serve Service
    die();
   } 
   // dd($_SERVER);
   // echo $_SERVER['REQUEST_URI'];

//  Make function to use to check URL ## Note Call this in all file
function url($value)  {
    // This URL is eork only in this file
    return $_SERVER['REQUEST_URI']===$value;
 }


?>