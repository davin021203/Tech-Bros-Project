<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

  //Database connection
  $conn = new mysqli('localhost' , 'root', '', 'signup');
  if($conn->connect_error){
       die('Connection Failed  :  '.$conn->connect_error);
  }else{
       $stmt = $conn->prepare("insert into registration(name, email, password, number)
           values(?, ?, ?, ?)");
       $stmt->bind_param("sssi",name, email, password, number);
       $stmt->execute();
       echo "Registration Successfull";
       $stmt->close();
       $conn->close();
  }
?>