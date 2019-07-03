
<?php

require "Persona.php";

class Contabile extends Persona {

  protected $matricola;
  public $ufficio;

  function setMatricola($_matricola) {
    $this->matricola = $_matricola;
  }

  function getMatricola() {
    return $matricola;
  }
}

 ?>
