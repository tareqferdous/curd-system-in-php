<?php
	//connect the database with our project
	
	 $connect = mysqli_connect('localhost', 'root', '', 'phpdevelopers');

      if ($connect) {
        //echo "Database connecton successfully";
      }
      else{
        die("Dtabase connecton failed");
      }

?>