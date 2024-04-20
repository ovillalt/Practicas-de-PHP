<?php
if($_SERVER["HTTP_HOST"]=="localhost"){
    $server="localhost";
    $db="practicasphp";
    $user="root";
    $password="";
}else{
    $server="localhost";
    $db="chowa_practicasphp";
    $user="chowa_practicasphp";
    $password="6*37J2hmn";
}
try{
    $conection = new PDO("mysql:host=$server;dbname=$db",$user,$password);
    echo '<h1>DB ok</h1>';
}catch(Exception $exception){
    echo $exception->getMessage();
}
