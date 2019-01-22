<?php

$host = 'rubiraj.mysql.database.azure.com';
$username = 'rubiraj@rubiraj';
$password = '@Raz_Ruvi';
$db_name = 'dacc';


//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name);

?>
