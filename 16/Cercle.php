<?php
namespace Act16;
class Cercle implements Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetre(){
        return 2 * pi() * $this->radio;
    }
}
?>