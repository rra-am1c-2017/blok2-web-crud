<?php
  // Maak contact met de database en server
  include("./db_connect.php");
  include("./functions/sanitize.php");

  $voornaam = sanitize($_POST["voornaam"]);
  $tussenvoegsel = sanitize($_POST["tussenvoegsel"]);
  $achternaam = sanitize($_POST["achternaam"]);
  $leeftijd = sanitize($_POST["leeftijd"]);
  $id = sanitize($_POST["id"]);
  
  // Dit is de sql-query die alle records uit de users tabel selecteert
  $sql = "UPDATE `users` SET `voornaam`       = '" . $voornaam.  "',
                             `tussenvoegsel`  = '" . $tussenvoegsel . "', 
                             `achternaam`     = '" . $achternaam . "', 
                             `leeftijd`       = '" . $leeftijd . "' 
                       WHERE `id`             =  " . $id;

  // We vuren de query af op de mysql-database via de verbinding $conn
  $result = mysqli_query($conn, $sql);

  header("Location: ./index.php");
?>