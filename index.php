<?php
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
    $about = $_POST['about'];

    $sql = "INSERT INTO `sdpr` ( `name`, `age`, `gender`, `email`, `phone`, `about`,
  `dt`) VALUES ( 'hello', '22', 'Male', 'bimlendukumarsingh.bks4@gmail.com',
  '8709349979', 'yes no', current_timestamp());";
   
   
?>