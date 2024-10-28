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
  private $encendido;    // Actividad 2
  
  //Constructor
  public function __construct($marca, $modelo, $color, $velocidad) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = $velocidad;
    $this->encendido = false;
  }
  
  // Actividad 2
  public function encender() {
    $this->encendido=true;
    return "El vehiculo ".$this->marca." ".$this->modelo." se encuentra en marcha\n";      
    }

    public function apagar() {
      $this->encendido=false;
      return "El vehiculo ".$this->marca." ".$this->modelo." se encuentra en apagado\n";      
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
    public function setColor($color) {
      $this->color = $color;
    }
  }
  class Berlina extends Coche {
    private $plazas;
  
    public function __construct($marca,$modelo,$color,$velocidad,$plazas) {
      parent::__construct($marca,$modelo,$color,$velocidad);
      $this->plazas = $plazas;
    }
  
    public function getPlazas() {
      return $this->plazas;
    }
    public function setPlazas($plazas) {
      $this->plazas = $plazas;
    }
    public function __toString() {
      return parent::__toString().", Plazas: ".$this->plazas;
    }
  }
  
  $berlina=new Berlina("volvo",  "v40", "azul", 210, 9);

  echo $berlina->__toString()."\n";
  
  $berlina->setMarca("Ford");
  $berlina->setModelo("Focus");
  $berlina->setColor("Gris");
  echo $berlina->__toString();

?>