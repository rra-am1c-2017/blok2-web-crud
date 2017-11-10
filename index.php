<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
      echo "<h3>Javascript, CSS en HTML5 werkt nog!</h3>";


      $voornaam = "Arjan";
      $tussenvoegsel = "de";
      $achternaam = "Ruijter";
      $haarkleur = "grijs";
      $schoenmaat = "45";
      $leeftijd = 49;

      $fruit0 = "Appel";
      $fruit1 = "Sinaasappel";
      $fruit2 = "Mango";



      echo "<p>Mijn voornaam is: " . $voornaam . " " . $tussenvoegsel . " " . $achternaam . "</p>";
      echo "<p>Mijn haarkleur is: " . $haarkleur . "</p>";
      echo "<p>Mijn schoenmaat is: " . $schoenmaat . "</p>";
      echo "<p>Mijn leeftijd is: " . $leeftijd  . "</p>";
      echo "<p>Over 10 jaar ben ik: " . ($leeftijd + 10) . "</p>";
      echo "<p>Mijn top 3 van fruit is: " . $fruit0 . ", " . $fruit1 . ", " . $fruit2;

  
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>