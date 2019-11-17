<?php
namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');
$climate = new \League\CLImate\CLImate;

use Ipssi\Evaluation\Exercice2\nuage;
use Ipssi\Evaluation\Exercice2\etoile;
use Ipssi\Evaluation\Exercice2\text;
use Ipssi\Evaluation\Exercice2\image;
use Ipssi\Evaluation\Exercice2\bloc;
use Ipssi\Evaluation\Exercice2\document;

$document = new document(
    array(
        new text(250,1000,array(30,30,30)),
        new image(50,100),
        new etoile(400,700,array(150,20,130)),
        new etoile(600,700,array(150,20,130)),
        new nuage(700,800,array(210,200,250))
    ),
    array(
        230,
        230,
        230
    )
);

echo 'Document color : ' . $document->getColorDisplay() . PHP_EOL . PHP_EOL;

foreach ($document->getElement() as $element) {
    foreach ($element->getProperty() as $property => $value) {
        if ('Color' == $property) {
            echo 'Color : ';
            foreach ($value as $rgb) {
               echo $rgb . ' ';
            }
            echo  PHP_EOL;
        } else {
            echo $property . ' : ' . $value . PHP_EOL;
        }
    }
    echo PHP_EOL;
}