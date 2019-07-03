<?php

class Persona {

  public $nome;
  public $cognome;
  public $eta;
  protected $sesso;

  public function getSesso() {
    return $this->sesso;
  }

    public function setSesso($genere) {
    $this->sesso = $genere;
  }

}

?>
