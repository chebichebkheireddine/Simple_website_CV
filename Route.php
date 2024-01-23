<?php
// Make reqest Serve
$url=parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump( $url);
// Let Make Route to run page
$routes=[
    "/index"=>"controller/index.php",
    "/Cv"=>"controller/Cv.php",
];

function conecteToServer($url,$routes){
    if(array_key_exists($url,$routes)){
        require $routes[$url];
    }else{
    
        abord();
    
    }
}
function abord($code=444) {
    http_response_code($code);
    echo "test";
}
conecteToServer($url,$routes);



?>