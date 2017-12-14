<?php
  // Maak contact met de server en database;
  include("./db_connect.php");

  // De sql delete query
  $sql = "DELETE FROM `users` WHERE `id` = " . $_GET["id"];

  // Vuur de query af op de database
  $result = mysqli_query($conn, $sql);

  // Leid om naar index.php
  header("Location: ./index.php");
?>