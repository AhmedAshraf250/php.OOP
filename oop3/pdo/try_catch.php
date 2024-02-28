<?php 
echo "<pre>";


$conn = new mysqli('localhost' , 'root' , '' , 'before_project');

try {

  $select = "SELECT * FROM user";

  $query = $conn -> query($select);

  if ( !$query ) {
    throw new Exception($conn -> error);
  }

  $user = $query -> fetch_assoc();

  print_r($user);

}catch(Exception $e) {

  print_r($e->getMessage());

}

