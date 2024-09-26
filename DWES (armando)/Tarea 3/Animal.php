<?php

  class Animal {

    //Atributos
    public $nombre;
    public $especie;

    //Constructor
    public function __construct($nombre,  $especie) {
      $this->nombre = $nombre;
      $this->especie = $especie;
    }

    //Metodos
    

    function obtNombre() {
      return $this->nombre;
    }

    function obtEspecie() {
      return $this->especie;
    }

    function __toString(){
      return "Animal -> Nombre: ".$this->nombre.", Especie: ".$this->especie;
    }

    function comportamiento(){
      return $this->nombre." es bueno";
    }
  }

  $gato=new Animal("Dobby", "Gato");

  echo $gato->obtNombre()."\n";
  echo $gato->__toString()."\n";
  echo $gato->comportamiento()."\n";

  echo "-----------------------\n";

  $gato->nombre="Desdentao";
  $gato->especie="Dragon";

  echo $gato->obtNombre()."\n";
  echo $gato->__toString()."\n";
  echo $gato->comportamiento()."\n";

?>