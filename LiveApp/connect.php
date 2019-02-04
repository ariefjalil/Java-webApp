<?php

$email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $login = filter_input(INPUT_POST, 'login');
 if (!empty($email)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "aiwebdev_ajx";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO users (email, password)
  values ('$email','$password')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
?>
