<?php include "db.php"; ?>
<?php include "header.php"; ?>

    <?php

    //To read all the information of an user
    if (isset($_GET['update'])) {
      $user_id = $_GET['update'];
      
      $query = "SELECT * FROM users WHERE user_id =   $user_id";

      $select_user_id = mysqli_query($connect, $query);

      while ($row = mysqli_fetch_assoc($select_user_id )) {
        $user_id      = $row['user_id'];
        $username     = $row['username'];
        $password     = $row['password'];
        $user_email   = $row['user_email'];
        $user_phone   = $row['user_phone'];
        $user_address = $row['user_address'];

        ?>


 <section class="login-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
          <div class="login-box">
            <h2>Update User Info</h2>
            <form action="" method="POST">

              <!-- Username field -->
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username?>">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Password</label>
                <input type="Password" name="password" class="form-control"value="<?php echo $password?>">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user_email ?>">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $user_phone?>">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $user_address?>">               
              </div>

              <div class="form-group">
                <input type="submit" name="update" class="btn btn-primary" value="Update">
              </div>

            </form>
          </div>
        </div>
        </div>
      </div>
    </section>



        <?php
      }
    }

    ?>

    <?php

    //To update the user info into the database
    if (isset($_POST['update'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];
      $email    = $_POST['email'];
      $phone    = $_POST['phone'];
      $address  = $_POST['address'];

      //Encrypted password
      $hassedPass = sha1($password);

        $query = "UPDATE users SET username = '$username', password = '$hassedPass', user_email = '$email', user_phone = '$phone', user_address = '$address' WHERE user_id = '$user_id' ";

        $update_query = mysqli_query($connect, $query);

        if (!$update_query) {
          die("Query Error" . mysqli_error($connect));
        }
        else{
          header("Location: all-users.php");
        }
    }

    ?>

   


<?php include "footer.php"; ?>