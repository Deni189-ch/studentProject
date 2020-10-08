<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    // $number = 151658436;

    // while ($number > 1) {
    //     $number /= 3;
    //     echo "$number <br>";
    // }

    // $number = 0;

    // while ($number <= 100) {

    //     if ($number <= 49) {
    //         echo "<i>$number</i> <br/>";
    //     } elseif ($number == 50) {
    //         echo "<u><b>$number</b></u> <br/>";
    //     } elseif ($number > 50) {
    //         echo "<u>$number</u> <br/>";
    //     };
    //     $number++; 
    // }

    // $students = [
    //     [
    //     'name' => 'Александр',
    //     'age' => 23
    //     ],
    //     [
    //     'name' => 'Михаил',
    //     'age' => 31
    //     ],
    //     [
    //     'name' => 'Марина',
    //     'age' => 31
    //     ],
    //     [
    //     'name' => 'Яна',
    //     'age' => 36
    //     ]
    // ];   

    // foreach ($students as $item) {
    //     echo "{$item['name']} {$item['age']}<br/>";
    // }
    

    $calendar = [
        [
        'title' => 'понедельник',
        'day' => 23
        ],
        [
        'title' => 'среда',
        'day' => 26
        ],
        [
        'title' => 'пятница',
        'day' => 28
        ]
    ];

    foreach ($calendar as $item) {
        echo "{$item['title']} {$item['day']} <br/>";
    }




    ?>



</body>
</html>