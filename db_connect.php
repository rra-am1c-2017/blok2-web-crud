<?php
  // De logingegevens voor de mysql-database
  $server_name = "localhost";
  $user_name = "rra_am1c_2017";
  $password = "Geheim!";
  $database_name = "am1c_2017_blok2_crud";

  // We maken contact met de mysql-server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);
?>