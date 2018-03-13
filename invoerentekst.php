<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$db = 'ZeeslagNickAlex';
$tekst = $_GET["invoertekst"];

$conn = mysqli_connect($servername, $username, $password, $db);

$date = date("h:i:s");
$conn->query('INSERT INTO tekst (tekst, timestamp) VALUES ("'.$tekst.'", "'. $date .'");');

echo "Tekst is opgeslagen";



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

