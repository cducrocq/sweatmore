<?php
// Session

// Cookie

// Base de donnée
date_default_timezone_set('Europe/Paris');

include('config.php');

try
{
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $database . ';charset=utf8', $users, $password);
}
catch(Exception $e)
{
    die('Erreur: ' . $e->getMessage());
}

// Configuration
$title = "Sweatmore";

$categories = [
    'musculation' => true,
    'fitness'     => false,
    'crossfit'    => false,
    'running'     => false
];

$items = [
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ]
];

$itemsSelection = [
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ]
];
