<!-- 

Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

 -->

<?php 

$students = [
    [
        'name' => 'Santiago',
        'lastName' => 'Boccardi',
        'grades' => [3, 10, 6, 2, 8, 4]
    ],

    [
        'name' => 'Gioele',
        'lastName' => 'Boccardi',
        'grades' => [7, 10, 8, 5, 4, 4]
    ],

    [
        'name' => 'Alessandro',
        'lastName' => 'Boccardi',
        'grades' => [7, 10, 6, 9, 9, 4]
    ],

    [
        'name' => 'Leonardo',
        'lastName' => 'Boccardi',
        'grades' => [3, 10, 6, 5, 8, 2]
    ]

];

foreach($students as $student) {
    // echo $student['name'], $student['lastName'];

    $sum = array_sum($student['grades']);
    // var_dump($sum);
    $average = $sum / count($student['grades']);
    // var_dump($average);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
     
<?php foreach($students as $student) { ?>
    <h1>Alunno: <?php echo $student['name'] . ' ' . $student['lastName'] ?></h1>
    <?php 
    $sum = array_sum($student['grades']);
    $average = $sum / count($student['grades']);?>
    <p>Media voti: <?php echo $average ?></p>
    <?php
}
?> 
    
</body>
</html>