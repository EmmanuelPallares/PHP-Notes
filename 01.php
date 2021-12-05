<?php 
declare( strict_types = 1);

include 'includes/header.php';

// Definir una clase
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

}
class CalcularIva{
 
  public function __construct(public int $numero, public int $total)
    {
    }
public function calcularIva() {
    $this->resultado = $this->numero * 0.16;
    $this->totalconiba=$this->resultado+$this->numero;
    echo "El iva es de: " . $this->resultado . " y el precio total es de: " . $this->totalconiba;
}
public function greeting() {
    echo "   Vuelve Pronto";
}

}


$resultadoIva=new CalcularIva(100,100);


$resultadoIva->calcularIva();
$resultadoIva->greeting();

echo "<pre>";
var_dump($resultadoIva);
echo "</pre>";



// $producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();


// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

// $producto2 = new Producto('Monitor Curvo', 300, true);
// $producto2->mostrarProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';