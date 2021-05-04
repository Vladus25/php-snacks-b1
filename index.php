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
      $matchesAll = [
        'matches' => [
          [
            'data' => '05/05/2021',
            'home' => 'Milano',
            'guest' => 'Napoli',
            'pointsHome' => 25,
            'pointsGuest' => 35,
          ],
          [
            'data' => '07/05/2021',
            'home' => 'Juventus',
            'guest' => 'Cagliari',
            'pointsHome' => 15,
            'pointsGuest' => 45,
          ],
          [
            'data' => '10/05/2021',
            'home' => 'Roma',
            'guest' => 'Palermo',
            'pointsHome' => 50,
            'pointsGuest' => 20,
          ],
          [
            'data' => '12/05/2021',
            'home' => 'Inter',
            'guest' => 'Lazio',
            'pointsHome' => 30,
            'pointsGuest' => 5,
          ],
        ],
      ];

      for ($i=0; $i <count($matchesAll[matches]); $i++) {

        $data = $matchesAll[matches][$i][data];
        $home = $matchesAll[matches][$i][home];
        $guest = $matchesAll[matches][$i][guest];
        $pointsHome = $matchesAll[matches][$i][pointsHome];
        $pointsGuest = $matchesAll[matches][$i][pointsGuest];

        if ($pointsHome > $pointsGuest ) {
          echo '<div>' . $data . ' | ' . $home . ' - ' . $guest . ' | ' . $pointsHome . ' - '. $pointsGuest . ' | ' . 'Winer: ' . $home . '</div>';
        }
        else{
          echo '<div>' . $data . ' | ' . $home . ' - ' . $guest . ' | ' . $pointsHome . ' - '. $pointsGuest . ' | ' . 'Winer: ' . $guest . '</div>';
        }
      }

      ?>
    </h1>

  </body>
</html>
