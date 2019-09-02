<?php
// Je fais les requêtes à la BDD



// Je mets les données dans tableau prêt à l'emploi
$articles = [
    [
        'id'          => 1,
        'name'        => 'Sweat à capuche',
        'category'    => 'fitness',
        'genre'       => 'f',
        'sizes'       => ['S', 'M', 'L', 'XL', 'XXL', '3XL', '4XL', '5XL'],
        'colors'      => ['black', 'grey'],
        'images'      => ['classique', 'dos', 'mouvement'],
        'description' => 'Sweat shirt  de bonne qualité bonne coupe molletonné.<br> 65% coton + 35% polyester, haute qualité, toucher doux et confortable, super chaud, parfait pour l\'automne hiver.<br> Manches Longues, chaud, capuche, sportive, casual'
    ]
    // Les images se trouvent dans images/articles/article_id_001/blue
    // [ 'id' =>  2, 'name' => 'Sweat Crossfit', 'category' => 'crossfit' ],
    // [ 'id' =>  3, 'name' => 'Basket de Runing', 'category' => 'running' ],
    // [ 'id' =>  4, 'name' => 'Tee-shirt de Musculation', 'category' => 'musculation' ]
];
