<?php
namespace Act16;
require "Forma.php";
require "Rectangle.php";
require "Cercle.php";
require "Triangle.php";
$rect1 = new Rectangle(10, 30);
$calcularAreaRectangulo = $rect1->calcularArea();
$calcularPerimetroRectangulo = $rect1->calcularPerimetre();

$tri1 = new Triangle(10,40);
$calcularAreaTriangulo = $tri1->calcularArea();
$calcularPerimetroTriangulo = $tri1->calcularPerimetre();

$cerc1 = new Cercle(98);
$calcularAreaCercle = $cerc1->calcularArea();
$calcularPerimetroCercle = $cerc1->calcularPerimetre();

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
    <p><?php echo "El perimetro del rectángulo es: " . $calcularPerimetroRectangulo . " m"; ?></p>
    <h3>Triangulo</h3>
    <p><?php echo "El área del triángulo es: " . $calcularAreaTriangulo . " m²"; ?></p>
    <p><?php echo "El perimetro del triángulo es: " . $calcularPerimetroTriangulo . " m"; ?></p>
    <h3>Círculo</h3>
    <p><?php echo "El área del círculo es: " . $calcularAreaCercle . " m²"; ?></p>
    <p><?php echo "El perimetro del circulo es: " . $calcularPerimetroCercle . " m"; ?></p>

</body>
</html>

