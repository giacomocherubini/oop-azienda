<?php

class Persona {

  public $nome;
  public $cognome;
  public $eta;
  protected $sesso;

  function __construct($name, $surname){
  $this->nome = $name;
  $this->cognome = $surname;
  }

  public function getSesso() {
    return $this->sesso;
  }

    public function setSesso($genere) {
    $this->sesso = $genere;
  }

}

?>
