<?php

/**
 * Introduction à Kint
 */

// inclusion de la librairie Kint
require './inc/kint.phar' ;

// inclussion de notre classe Category
require './inc/classes/Category.php' ;


$age = 43;

// utilisation classique de var_dump
var_dump($age);

// Maintenant on va afficher les infos sur notre variable avec
// la librairie Kint
Kint::dump($age);



$dataCategoriesList = [
    1 => 'TeamBack',
    2 => 'TeamFront',
    3 => 'Collaboration',
    4 => 'Ma Vie De Dev'
];
Kint::dump($dataCategoriesList);



$dataCategoriesList = [
    // ID => objet Category
    1 => new Category('TeamBack'),
    2 => new Category('TeamFront'),
    3 => new Category('Collaboration'),
    4 => new Category('Ma Vie De Dev')
];
Kint::dump($dataCategoriesList);



//echo "Hello" ;