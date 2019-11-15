<?php
namespace Ipssi\Evaluation\Exercice2;

class element
{
    protected $x;
    protected $y;

    public function __construct (int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }
}