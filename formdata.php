<?php
  //   Maak contact met de database en server
  include("./db_connect.php");
  include("./functions/sanitize.php");

  // We maken de vieze $_POST waarden schoon
  $voornaam = sanitize($_POST["voornaam"]);
  $tussenvoegsel = sanitize($_POST["tussenvoegsel"]);
  $achternaam = sanitize($_POST["achternaam"]);
  $leeftijd = sanitize($_POST["leeftijd"]);

  // We maken onze query voor het inserten van de formuliergegevens.
  $sql = "INSERT INTO `users` (`id`,
                              `voornaam`,
                              `tussenvoegsel`,
                              `achternaam`,
                              `leeftijd`)
          VALUES              (NULL,
                              '" . $voornaam . "',
                              '" . $tussenvoegsel . "',
                              '" . $achternaam . "',
                              '" . $leeftijd . ")";

  //echo $sql; exit();
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
  
  echo "<h1>Gefeliciteerd, de gegevens zijn weggeschreven naar de database-tabel!</h1>";
  // Wil je direct doorgestuurd worden naar de index.php pagina dan gebruik je... 
  header("Location: ./index.php");

  // Wil je doorgestuurd worden naar index.php maar toch een aantal seconden op de
  // pagina blijven dan gebruik je... 
  //header("Refresh: 2; url=./index.php");
 
  
?>


Opdracht:

Bedenk een tweetal extra velden in je database en zorg dat je ze kunt invoeren in het formulier en dat ze zichtbaar zijn in de tabel