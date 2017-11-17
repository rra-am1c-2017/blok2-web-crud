<?php
  /* echo "Dit is de pagina formdata.php";
  var_dump($_POST);
  //echo "Mijn naam is: {$_POST["voornaam"]} {$_POST["tussenvoegsel"]} {$_POST["achternaam"]}";
  echo "<p>Mijn naam is: " . $_POST["voornaam"] . " " . $_POST["tussenvoegsel"]. " " . $_POST["achternaam"] . "</p>";
  //echo "Mijn wachtwoord is: {$_POST["password"]}";
  echo "<p>Mijn wachtwoord is: " . $_POST["password"] . "</p>";
 */
  // De logingegevens voor de mysql-database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1c_2017_blok2_crud";

  // We maken contact met de mysql-server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // We maken onze query voor het inserten van de formuliergegevens.
  $sql = "INSERT INTO `users` (`id`,
                              `voornaam`,
                              `tussenvoegsel`,
                              `achternaam`,
                              `leeftijd`)
          VALUES              (NULL,
                              '" . $_POST["voornaam"] . "',
                              '" . $_POST["tussenvoegsel"] . "',
                              '" . $_POST["achternaam"] . "',
                              '" . $_POST["leeftijd"] ."')";

  //echo $sql;
  /* Opdracht
      Maak minimaal de volgende velden in je formulier en database en zorg dat je 
      deze gegevens kunt wegschrijven naar de tabel
      - Roepnaam
      - straatnaam
      - huisnummer
      - postcode
      - woonplaats
      - vooropleiding (select)
      - geboortedatum
      - Telefoonnummer
      - Mobiel
      - E-mailadres
      - geslacht
      - IBAN


      */
  
  mysqli_query($conn, $sql);
  
  echo "Gefeliciteerd, de gegevens zijn weggeschreven naar de database-tabel!";
  // Wil je direct doorgestuurd worden naar de index.php pagina dan gebruik je... 
  //header("Location: ./index.php");

  // Wil je doorgestuurd worden naar index.php maar toch een aantal seconden op de
  // pagina blijven dan gebruik je... 
  header("Refresh: 10; url=./index.php");
 
  
?>