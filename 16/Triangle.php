<?php
namespace Act16;

class Triangle implements Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function calcularPerimetre(){
        return 3 * $this->base; // Tenemos en cuenta que es equilátero, así que los 3 lados son iguales
    }
}

?>