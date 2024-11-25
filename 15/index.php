<?php

// Clase abstracta Forma
abstract class Forma {
    abstract public function calcularArea();
}

// Clase Rectangle
class Rectangle extends Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Clase Triangle
class Triangle extends Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

// Clase Cercle
class Cercle extends Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Instancias y cálculos
$rect1 = new Rectangle(10, 30);
$calcularAreaRectangulo = $rect1->calcularArea();

$tri1 = new Triangle(40, 17);
$calcularAreaTriangulo = $tri1->calcularArea();

$cerc1 = new Cercle(98);
$calcularAreaCercle = $cerc1->calcularArea();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Areas</title>
</head>
<body>
    <h1>Calculo de Areas</h1>
    <h3>Rectangulo</h3>
    <p><?php echo "El área del rectángulo es: " . $calcularAreaRectangulo . " m²"; ?></p>
    <h3>Triangulo</h3>
    <p><?php echo "El área del triángulo es: " . $calcularAreaTriangulo . " m²"; ?></p>
    <h3>Círculo</h3>
    <p><?php echo "El área del círculo es: " . $calcularAreaCercle . " m²"; ?></p>
</body>
</html>
