<!-- 

Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

 -->

 <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    foreach ($db as $role => $infos) {
        var_dump($role, $infos);
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($db as $role => $infos) : ?>
        <?php foreach ($infos as $info) :?>
        <p style=" background-color: <?php echo $role === teachers ? 'lightgray' : 'green' ?>"><?= $info['name'] . ' ' . $info['lastname'] ?></p>
        <?php endforeach ?>
    <?php endforeach ?>

    <p style= ></p>
</body>
</html>