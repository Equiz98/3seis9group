<?php

// $servername = "localhost";
// $database = "3seis9group"; 

// $username = "root";
// $password = "root";
// $sql = "mysql:host=$servername;dbname=$database;";
// $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// // Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
// try { 
//   $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
//   echo "Connected successfully";
// } catch (PDOException $error) {
//   echo 'Conection error' . $error->getMessage();
//   die();
// }


$link = 'mysql:host=localhost;dbname=3seis9group';

$user = 'root';
$pass = 'root';

try{
    $pdo = new PDO ($link,$user,$pass);
    echo "Connected successfully";
}catch(PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
