<?php 
error_reporting(E_ALL & ~E_DEPRECATED);
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'Jasmyg04', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}
