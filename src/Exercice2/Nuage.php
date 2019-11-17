<?php
namespace Ipssi\Evaluation\Exercice2;
use Ipssi\Evaluation\Exercice2\form;

class nuage extends form
{    
    public function __construct(int $x, int $y, array $color) {
        parent:: __construct($x, $y, $color);
        $this->type = 'nuage';
    }
    
    public function getProperty () {
        return array(
            'Type' => $this->type,
            'Color' => $this->color,
            'Position X' => $this->x,
            'Position Y' => $this->y
        );
    }
}