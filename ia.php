<?php
/**
 *
 */
class ia
{
  // Declaración de propiedades
  public $columna = 0;
  public $fila = 1;


  // Declaración de métodos
  public function getColumna(){

    return $this->columna = rand (1,3);
  }

  public function getFila(){
    
    return $this->fila =rand (1,3);
  }

}

 ?>
