<?php
// Session

// Cookie

// Base de donnée
date_default_timezone_set('Europe/Paris');

require dirname(__DIR__).'/env.php';

try
{
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $database . ';charset=utf8', $login, $password);
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

$articlesSelection = [
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ],
    [ 'id' => 1, 'name' => 'Sweat' ]
];
