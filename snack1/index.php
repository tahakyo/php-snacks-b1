<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-SNACKS</title>
</head>

<body>
  <!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- Array creato delle partite -->
<?php
    $games = [
      [
        "home" => "Bulls",
        "away" => "Utah",
        "home_pts" => "98",
        "away_pts" => "85",
      ],
      [
        "home" => "Bulls",
        "away" => "Utah",
        "home_pts" => "102",
        "away_pts" => "98",
      ],
      [
        "home" => "Orlando",
        "away" => "Pistons",
        "home_pts" => "78",
        "away_pts" => "86",
      ],
      [
        "home" => "Grizzly",
        "away" => "Raptors",
        "home_pts" => "110",
        "away_pts" => "102",
      ],
      [
        "home" => "Lakers",
        "away" => "Wizzards",
        "home_pts" => "89",
        "away_pts" => "72",
      ],
      [
        "home" => "Miami",
        "away" => "Celtics",
        "home_pts" => "83",
        "away_pts" => "88",
      ],
    ];
    // var_dump($games);
?>

<ul>
    <?php for ($i=0; $i < count($games) ; $i++) { 
      $current_game = $games[$i];
      // var_dump($current_game);
      echo "<li><h1>". $current_game["home"]." - ". $current_game["away"] ." | ". $current_game["home_pts"] ."-". $current_game["away_pts"] ."</h1></li>";
    }
        
    ?>
</ul>

</body>

</html>