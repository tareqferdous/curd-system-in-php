<?php include "db.php"; ?>

    <?php


//Resister a new user to our platfrom
    function creatUser(){
      global $connect;
    
    if (isset($_POST['resister'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email    = $_POST['email'];
      $phone    = $_POST['phone'];
      $address  = $_POST['address'];

      // MySql security function
      $username = mysqli_real_escape_string($connect, $username);
      $password = mysqli_real_escape_string($connect, $$password);
      $email = mysqli_real_escape_string($connect, $email);
      $phone = mysqli_real_escape_string($connect, $phone);
      $address = mysqli_real_escape_string($connect, $address);

      //Encrypted password
      $hassedPass = sha1($password);

      $query = "INSERT INTO users (username, password, user_email, user_phone, user_address ) VALUES('$username',' $hassedPass',' $email', '$phone', '$address')";

      $creat_new_user = mysqli_query($connect, $query);

      if (!$creat_new_user) {
        die("Query Failed" . mysqli_error($connect));
      }
      else{
        header("Location: all-users.php");
      }
    }
    }

//Detele users info form the all-users table
    function deleteUser(){
    global $connect;
    if (isset($_GET['delete'])) {
      $the_user_id = $_GET['delete'];
      $query = "DELETE FROM users WHERE user_id = $the_user_id";
      $delete_user = mysqli_query($connect, $query);
      header("Location: all-users.php");
    }
    }

    ?>