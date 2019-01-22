
<!--ESERCIZIO N°1 -->
<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PASSWORD</title>
  </head>
  <body>

    <?php
      $password = (!empty($_GET['password'])) ? $_GET['password'] : NULL;
      //valore default
      $class = 'red';
      $message = 'ACCESS DENIED!!';
      //se la password è giusta cambia i valori
      if($password == 'Boolean'){
        $class = 'green';
        $message = 'ACCESS ENABLED!';
      }
    ?>

    <p class="<?php echo $class; ?>"><?php echo $message; ?></p>
  </body>
</html>
