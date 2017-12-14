<?php
  // Maak contact met de database en server
  include("./db_connect.php");

  // Dit is de sql-query die alle records uit de users tabel selecteerd
  $sql = "SELECT * FROM `users` WHERE `id` = " . $_GET["id"];

  // We vuren de query af op de mysql-database via de verbinding $conn
  $result = mysqli_query($conn, $sql);

  $record = mysqli_fetch_assoc($result);

  // var_dump($record);
?>

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
    <main class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <h3>Registratieformulier</h3>
          <form action="./update_code.php" method="post">
            <div class="form-group row">
              <label for="input_voornaam" class="col-sm-2 col-form-label">Voornaam</label>
              <div class="col-sm-10">
                <input type="text" 
                       name="voornaam" 
                       class="form-control" 
                       id="input_voornaam" 
                       placeholder="vul in voornaam"
                       value="<?php echo $record["voornaam"]; ?>"
                       autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="input_tussenvoegsel" class="col-sm-2 col-form-label">Tussenvoegsel</label>
              <div class="col-sm-10">
                <input type="text" 
                       name="tussenvoegsel" 
                       class="form-control" 
                       id="input_tussenvoegsel" 
                       placeholder="vul in tussenvoegsel"
                       value="<?php echo $record['tussenvoegsel']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_achternaam" class="col-sm-2 col-form-label">Achternaam</label>
              <div class="col-sm-10">
                <input type="text" 
                       name="achternaam" 
                       class="form-control" 
                       id="input_achternaam" 
                       placeholder="vul in achternaam"
                       value="<?php echo $record['achternaam']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_leeftijd" class="col-sm-2 col-form-label">Leeftijd</label>
              <div class="col-sm-10">
                <input type="number" 
                       min=0 max=255 
                       name="leeftijd" 
                       class="form-control" 
                       id="input_leeftijd"
                       value="<?php echo $record['leeftijd']; ?>">
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Verstuur!</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-2"></div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>