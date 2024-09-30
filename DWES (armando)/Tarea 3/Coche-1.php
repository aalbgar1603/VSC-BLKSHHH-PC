<?php
/**
 * Antonio Miguel Alba Garcia
 */
  class Coche {
    //Atributos
    private $marca;
    private $modelo;
    private $color;
    private $velocidad;

    //Constructor
    public function __construct($marca, $modelo, $color, $velocidad) {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->color = $color;
      $this->velocidad = $velocidad;
    }
    //getters and setters
    public function getMarca() {
      return $this->marca;
    }
    public function getModelo() {
      return $this->modelo;
    }
    public function getColor() {
      return $this->color;
    }
    public function getVelocidad() {
      return $this->velocidad;
    }
    public function __toString() {
      return "Marca: ".$this->getMarca().", Modelo: ".$this->getModelo().", Color: ".$this->getColor().", Velocidad: ".$this->getVelocidad();
    }
    public function setMarca($marca) {
      $this->marca = $marca;
    }
    public function setVelocidad($velocidad) {
      $this->velocidad = $velocidad;
    }
    public function setModelo($modelo) {
      $this->modelo = $modelo;
    }
  }

  $coche=new Coche("volvo",  "v40", "azul", 2100);

  echo "To String:\n".$coche->__toString()."\nOtros atributos:\n";

  echo $coche->getMarca()."\n";
  echo $coche->getModelo()."\n"; 
  echo $coche->getColor()."\n";
  echo $coche->getVelocidad()."\n";

  echo "----------------------";

  $coche->setMarca("");

  echo $coche->getMarca()."\n";
  echo $coche->getModelo()."\n"; 
  echo $coche->getColor()."\n";
  echo $coche->getVelocidad()."\n";
?>