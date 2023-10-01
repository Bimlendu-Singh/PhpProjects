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

    $sql = "INSERT INTO `sdpr`.`sdpr` ( `name`, `age`, `gender`, `email`, `phone`, `about`,
  `dt`) VALUES ( '$name', '$age', '$gender', '$email',
  '$phone', '$desc', current_timestamp());";
 

  // echo $sql;

  if($con->query($sql)==true)
  {
    $insert = true;
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }
   
   $con->close();
 }
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sadhanapada</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat&family=Foldit:wght@300&family=Young+Serif&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat&family=Foldit:wght@300&family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <img class="bg" src="bg7.avif" alt="Sadhanapada Image" />
    <div class="container">
      <h1>Sadhanapada Registration</h1>
      <br />
      <p>Enter Your deatils to confirm your Participation</p>
      <br />
      <?php
        if($insert == true)
        {
            echo "<p>Thanks for submitting the form.</p>";
        }
      ?>

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name"
        />
        <input type="text" name="age" id="age" placeholder="Enter Your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter Your Gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter Your Email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter Your Phone"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter About Yourself"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <script>
      src = "index.js";
    </script>
  </body>
</html>
