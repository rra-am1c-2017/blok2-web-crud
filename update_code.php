<?php
  // Maak contact met de database en server
  include("./db_connect.php");

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