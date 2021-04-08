<?php
require 'animal.php';

$a = new animal('dog','dog',10,'big','eatt');

$a->getAnimalName();
$a->getAnimalType();
$a->getAnimalAge();
$a->getAnimalSize();
$a->getAnimalAction();


echo '<pre>';
    var_dump($a);
echo '</pre>';