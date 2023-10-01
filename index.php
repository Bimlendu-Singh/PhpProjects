<?php
  $insert = false;
 if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
    die("connection to this database is failed due to" . mysqli_connect_error());
   }

    //echo "Successfully connected to the database..";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `sdpr`.'sdpr' ( `name`, `age`, `gender`, `email`, `phone`, `desc`,
  `dt`) VALUES ( '$name', '$age', '$gender', '$email',
  '$phone', '$desc', current_timestamp());";

  // echo $sql;

  if($con->query(sql)==true)
  {
    $insert = true;
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }
   
   $con->close();
 }
   
?>