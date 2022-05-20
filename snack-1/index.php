<!-- 

## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

 -->

 <?php 

 //Creo un array con le partite
 $matches = [
     [
         "homeTeam" => "Juventus",
         "visitingTeam" => "Inter",
         "homeScore" => 10,
         "visitingScore" => 0

     ],
     [
        "homeTeam" => "Milan",
        "visitingTeam" => "Sassuolo",
        "homeScore" => 1,
        "visitingScore" => 3

    ],
    [
        "homeTeam" => "Parma",
        "visitingTeam" => "Genoa",
        "homeScore" => 1,
        "visitingScore" => 1

    ],
    [
        "homeTeam" => "Roma",
        "visitingTeam" => "Lazio",
        "homeScore" => 2,
        "visitingScore" => 3

    ],
];

// var_dump($matches);

for ($i=0; $i < count($matches) ; $i++) { 
     $match = $matches[$i];
    //  var_dump($match);
     $finalScore = $match['homeTeam']  .  ' - ' . $match['visitingTeam']  .  ' | ' . $match['homeScore']  .  ' - '  .  $match['visitingScore'];
    //  var_dump($finalScore);
    echo $finalScore;
}
?>