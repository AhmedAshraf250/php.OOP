<?php

echo "<pre>";


// $conn  = new mysqli(); // oop 
// $conn  = mysqli_connect(); // functional

$dsn = "mysql:hostname=localhost;dbname=before_project;charset=utf8";

$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,
  PDO::ATTR_PERSISTENT => true ,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$conn = new PDO($dsn , 'root' , '' , $options); // 12 database 

// $conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
// $conn -> setAttribute(PDO::ATTR_PERSISTENT , true);

$id = 1 ; 

$select = "SELECT * FROM users WHERE id =  :id  ";

$prepare = $conn -> prepare($select);

// $prepare -> bindParam(1 , $id);

$prepare -> execute([
  ':id' => $id
]);

$users = $prepare -> fetchAll(PDO::FETCH_OBJ);

print_r($users);