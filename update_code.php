<?php
  var_dump($_POST);
  // De logingegevens voor de mysql-database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1c_2017_blok2_crud";

  // We maken contact met de mysql-server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // Dit is de sql-query die alle records uit de users tabel selecteert
  $sql = "UPDATE `users` SET `voornaam`       = '" . $_POST["voornaam"] . "',
                             `tussenvoegsel`  = '" . $_POST["tussenvoegsel"] . "', 
                             `achternaam`     = '" . $_POST["achternaam"] . "', 
                             `leeftijd`       = '" . $_POST["leeftijd"] . "' 
                       WHERE `id`             =  " . $_POST['id'];

  // We vuren de query af op de mysql-database via de verbinding $conn
  $result = mysqli_query($conn, $sql);

  header("Location: ./index.php");
?>