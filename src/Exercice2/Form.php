<?php
namespace Ipssi\Evaluation\Exercice2;
use Ipssi\Evaluation\Exercice2\element;

class form extends element
{
    protected $color;
    
    public function __construct(int $x, int $y, array $color) {
        parent:: __construct($x, $y);
        $this->color = $color;
    }
}