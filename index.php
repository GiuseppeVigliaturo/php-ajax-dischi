<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


  </head>
  <body>

    <!-- Stampare a schermo una decina di dischi musicali
    (vedi screenshot) in due modi diversi:
    - Solo con l'utilizzo di PHP, che stampa
    direttamente i dischi in pagina: al caricamento
    della pagina ci saranno tutti i dischi.
    - Attraverso l'utilizzo di AJAX: al caricamento
    della pagina ajax chiederà attraverso una
    chiamata i dischi a php e li stamperà
    attraverso handlebars.
    Utilizzare: Html, Sass, JS, jQuery, handlebars, Php
    Opzionale:
    - Attraverso un'altra chiamata ajax, filtrare gli
    album per artista -->
    <div class="container">

      <?php

      foreach ($database as $songs) {
        // print_r($songs);
        echo $songs['title']."<br>".
        $songs['author']."<br>".
        $songs['year']."<br>";
        ?>
        <img class="disco" src="<?php echo $songs['poster']  ?>" alt="">
        <?php
        echo "<br>";
      }

       ?>

    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js">

    </script>
  </body>
</html>
