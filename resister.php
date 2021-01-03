<?php include "db.php"; ?>
<?php include "header.php"; ?>
<?php include "functions.php"; ?>

  
  <body>

    <?php creatUser(); ?>
    
    <section class="login-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
          <div class="login-box">
            <h2>Resister User</h2>
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

              <!-- Password field -->
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control">               
              </div>

              <!-- Password field -->
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">               
              </div>

              <div class="form-group">
                <input type="submit" name="resister" class="btn btn-primary">
              </div>

            </form>
          </div>
          
        </div>
        </div>
      </div>
    </section>

  </body>
    

<?php include "footer.php"; ?>