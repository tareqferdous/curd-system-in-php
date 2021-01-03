<?php include "db.php"; ?>
<?php include "header.php"; ?>

    <?php

    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      }

    ?>

    <section class="login-section">
      <div class="container">
        <div class="col-md-4 offset-md-4">
          <div class="login-box">
            <h1>Admin Login</h1>
            <form action="" method="POST">

              <!-- Username field -->
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Password</label>
                <input type="Password" name="password" class="form-control">               
              </div>

              <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include "footer.php"; ?>


