<?php

  class Film {
    protected $titolo;
    protected $genere;
    protected $durata;
    protected $trama;
    protected $regista;
    protected $cast;

    public function __construct($_titolo, $_genere, $_durata, $_trama, $_regista, $_cast) {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
      $this->durata = $_durata;
      $this->trama = $_trama;
      $this->regista = $_regista;
      $this->cast = $_cast;
    }

    public function getTitolo() {
      return $this->titolo;
    }
  }