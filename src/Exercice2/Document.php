<?php
namespace Ipssi\Evaluation\Exercice2;

class document
{
    private $element;
    private $color;
    
    public function __construct(array $element, $color) {
        $this->element = $element;
        $this->color = $color;
    }

    public function getElement() {
        return $this->element;
    }

    public function getColorArray() {
        return $this->color;
    }

    public function getColorDisplay() {
        foreach($this->color as $key) {
            $colorDisplay = $colorDisplay . $key . ' ';
        }
        return $colorDisplay;
    }

    public function setColor(int $r, int $g, int $b) {
        $this->color = array($r, $g, $b);
    }
}