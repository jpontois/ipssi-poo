<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');
$climate = new \League\CLImate\CLImate;

use Ipssi\Evaluation\Exercice2\nuage;
use Ipssi\Evaluation\Exercice2\etoile;
use Ipssi\Evaluation\Exercice2\text;
use Ipssi\Evaluation\Exercice2\image;
use Ipssi\Evaluation\Exercice2\bloc;

$document = new bloc(0,0,array(230,230,230));
$text = new text(250,1000,array(30,30,30));
$image = new image(50,100);
$etoile1 = new etoile(400,700,array(150,20,130));
$etoile2 = new etoile(600,700,array(150,20,130));
$nuage = new nuage(700,800,array(210,200,250));

foreach(element as $key) {
    $property = $this->getProperty();
    
}

