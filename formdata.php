<?php
  echo "Dit is de pagina formdata.php";
  var_dump($_POST);
  //echo "Mijn naam is: {$_POST["voornaam"]} {$_POST["tussenvoegsel"]} {$_POST["achternaam"]}";
  echo "<p>Mijn naam is: " . $_POST["voornaam"] . " " . $_POST["tussenvoegsel"]. " " . $_POST["achternaam"] . "</p>";
  //echo "Mijn wachtwoord is: {$_POST["password"]}";
  echo "<p>Mijn wachtwoord is: " . $_POST["password"] . "</p>";

  $sql = "INSERT INTO `users` (`id`,
                              `voornaam`,
                              `tussenvoegsel`,
                              `achternaam`)
          VALUES              (NULL,
                              '" . $_POST["voornaam"] . "',
                              '" . $_POST["tussenvoegsel"] . "',
                              '" . $_POST["achternaam"] . "')";

  echo $sql;

?>