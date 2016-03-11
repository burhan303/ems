<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $servername = "localhost";
 $username = "root";
 $password = "";

try{
    $connection = new PDO("mysql:host=$servername;dbname=ctproject",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Successfull';
} 
catch (PDOException $ex) {
    echo 'Failed'. $ex->getMessage();
}

?>

