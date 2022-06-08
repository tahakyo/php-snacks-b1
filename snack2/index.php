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
<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $at_verify = strpos($mail, "@");
    $pt_verify = strpos($mail, ".");
?>
<?php  if ($at_verify !== false && $pt_verify !== false && strlen($name) >= 3 && is_numeric($age)) {  ?>
   
  <div>
     <h3>Accesso riuscito</h3>
   </div>
      
<?php } else { ?>

  <div>
    <h3>Accesso negato</h3>
  </div>
  
<?php } ?>

<!-- esepmio per il controllo -->
<!-- http://localhost/php-snacks-b1/snack2/?name=taha&mail=taha@mail.com&age=33 -->
</body>
</html>