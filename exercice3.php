<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');
$climate = new \League\CLImate\CLImate;

use Ipssi\Evaluation\Useless;


$input = $climate->input("Entrez l’indice de l’entier à diviser (entre 1 et 10) : ");
$index = $input->prompt();