<?php

class Fruta
{
  private $nombre;
  private $sabor;
  private $color;

  public function __construct($nombre, $sabor, $color)
  {
    $this->nombre = $nombre;
    $this->sabor = $sabor;
    $this->color = $color;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function getSabor()
  {
    return $this->sabor;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function setNombre($nombre)
  {
    return $this->nombre  = $nombre;
  }
  public function setSabor($sabor)
  {
    return $this->sabor = $sabor;
  }
  public function setColor($color)
  {
    return $this->color = $color;
  }

  function __toString()
  {
    return "Es un/a " . $this->nombre . " es " . $this->sabor . " y es de color " . $this->color;
  }
}

class Mediterranea extends Fruta
{
  private $textura;

  public function __construct($nombre, $sabor, $color)
  {
    parent::__construct($nombre, $sabor, $color);
  }
}

$platano = new Fruta("Platano", "Dulce", "Amarillo");
$manzana = new Fruta("Manzana", "Dulce", "Colorada");

echo $manzana->getNombre() . "\n";

echo $platano->getNombre() . " " . $platano->getSabor() . "\n";

$platano->setSabor("Acido");

echo $platano->__toString();
