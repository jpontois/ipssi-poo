<?php
namespace Ipssi\Evaluation\Exercice2;
use Ipssi\Evaluation\Exercice2\element;

class text extends element
{
    private $color;
    
    public function __construct(int $x, int $y, array $color) {
        parent:: __construct($x, $y);
        $this->color = $color;
        $this->type = 'text';
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