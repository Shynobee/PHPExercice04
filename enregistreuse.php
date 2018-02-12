<?php 

$list = [
    stark => ironman,
    logan => wolverine,
    peter => spiderman,
    gwen => spidergirl,
    stan => boss,
];

echo "<pre>";
print_r($list);
echo "</pre>";


$course = [
    'Fruit' => [
        'Fraise' => 2.10,
        'Orange' => 0.85,
        'Tomate' => 0.60,
        'Mangue' => 3.00,
    ],
    'Legume' => [
        'Haricot' => 1.20,
        'Carotte' => 1.00,
        'Salade' => 0.80,
    ],
    'Autres' => [
        'Charbon' => 4.85,
        'Balai' => 3.50,
    ],
];

$res = $course['Fruit']['Fraise'] + $course['Legume']['Carotte'] + $course['Autres']['Balai'];

echo($res);

echo "<pre>";
print_r($course);
echo "</pre>";

unset($course['Legume']['Carotte']);

echo "<pre>";
print_r($course);
echo "</pre>";
?>