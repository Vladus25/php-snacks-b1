<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
      body{
        background-color: purple;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>PHP</h1>

    <h1>
      <?php
        // Regole per Nome
        $name = $_GET["name"];

        // Misura la lungezza del Name
        $nameLung = strlen($name);

        // Regole per Email
        $mail = $_GET["email"];

        // Controlla se email contenga chiocciola e punto
        $hasAt = strpos($mail, '@');
        $hasDot = strpos($mail, '.');

        // Regole per Eta
        $age = $_GET["age"];

        // Funzione per verificare se e una eta
        $ageNum = is_numeric($age);

        // Risposta Finale
        if (($hasAt === false || $hasDot === false) || $nameLung <= 3 || $ageNum === false) {
          echo 'Acesso Negato, controllate bene dati inseriti';
        }
        else {
          echo 'Acesso riuscito';
        }

       ?>
    </h1>
  </body>
</html>
