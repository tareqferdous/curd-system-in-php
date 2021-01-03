<?php include "db.php"; ?>
<?php include "header.php"; ?>
<?php include "functions.php"; ?>

    <?php

    $query = "SELECT * FROM users";

    $select_all_users = mysqli_query($connect, $query);

    ?>

    <section class="login-section">
      <div class="container">
        <div class="row">
          <h2>All Resistered Users</h2>

          <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          
          <tbody>

            <?php

            while ($row = mysqli_fetch_assoc($select_all_users) ){
              
              $user_id  = $row['user_id'];
              $username = $row['username'];
              $email = $row['user_email'];
              $phone = $row['user_phone'];
              $address = $row['user_address'];

            ?>

              <tr>
              <th scope="row"><?php echo $user_id; ?></th>
              <td><?php echo $username; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $phone; ?></td>
              <td><?php echo $address; ?></td>
              <td>
                <div class="btn btn-group">
                  <!--Update Button-->
                  <a href="update-users.php?update=<?php echo $user_id; ?>" class="btn btn-primary">Update</a>
                  <!--Delete Button-->
                  <a href="all-users.php?delete=<?php echo $user_id; ?>"class="btn btn-danger">Delete</a>
                </div>
              </td>
              </tr>

            <?php

              }

            ?>

            
          </tbody>
          </table>


        </div>
      </div>
    </section>

    <?php deleteUser();?>


<?php include "footer.php"; ?>