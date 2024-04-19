<?php
if($_SERVER["HTTP_HOST"]=="loclhost"){
    $server="localhost";
    $db="practicasphp";
    $user="root";
    $password="";
}else{
    $server="localhost";
    $db="chowa_practicasphp";
    $user="root";
    $password="6*37J2hmn";
}
try{
    $conection = new PDO("mysql:host=$server;dbname=$db",$user,$password);
    echo "Thats great, You're connected";
}catch(Exception $exception){
    echo $exception->getMessage();
}
