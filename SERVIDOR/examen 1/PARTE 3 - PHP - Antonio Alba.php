<?php
//Antonio Miguel Alba Garcia
class Fruta {
    private $nombre;
    private $sabor;
    private $color;
    
    public function __construct ($nombre, $sabor, $color) {
        $this->nombre = $nombre;
        $this->sabor = $sabor;
        $this->color = $color;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function getSabor() {
        return $this->sabor;
    }
    public function getColor() {
        return $this->color;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setSabor($sabor) {
        $this->sabor = $sabor;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function __toString() {
        return "La fruta se llama " . $this->nombre . " su sabor es " . $this->sabor . " y su color " . $this->color;
    }
    
    //d
    public function paraZumo()  {
        return "Si, es apta para zumo";
    }
}

class Mediterranea extends Fruta {
    
    public $textura;
    
    public function __construct($nombre, $sabor, $color, $textura) {
        parent::__construct($nombre, $sabor, $color);
        $this->textura = $textura;
    }
    
    public function getTextura() {
        return $this->textura;
    }
    public function setTextura($textura) {
        return $this->textura = $textura;
    }
    
    public function __toString() {
        return parent::__toString() . " y su textura es " . $this->textura;
    }
    
    public function paraZumo()  {
        return "No, es apta para zumo";
    }
}

//a
$fruta1 = new Fruta("Platano", "Dulce", "Amarillo");
$fruta2 = new Fruta("Manzana", "Dulce", "Roja");

//b
echo $fruta1->__toString() . "\n";

//c
$fruta2->setColor("Verde");
echo $fruta2->getNombre() . " " . $fruta2->getColor() . "\n";

//e
echo $fruta2->paraZumo() . "\n";

$med = new Mediterranea("Piña","Acido y Dulce","Amarilla","Crujiente");

echo $med->__toString() . "\n";

$med->setColor("Marron");
$med->setTextura("Suave");

echo $med->__toString() . "\n";

echo $fruta1->paraZumo() . "\n";
echo $med->paraZumo();












