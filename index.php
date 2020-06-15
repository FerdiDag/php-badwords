<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $parolaccia = $_GET["badword"];
  $censurato = str_ireplace("$parolaccia","***","$testo");
  $lunghezza = strlen("$censurato");
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Badword</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <p>
            <?php

            echo "$censurato";
            echo "$lunghezza";

            ?>
        </p>
   </body>
</html>
