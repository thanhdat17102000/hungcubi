<?php
function database(){
    $host = "localhost"; 
    $dbname="hungcubi";
    $username = "root"; 
    $password = "";
    $port = 3307;
    $conn = new PDO("mysql:host=localhost; port=$port;dbname=$dbname; charset=utf8", $username, $password);
}
?>