<?php

  class Spettacolo {
    protected $film;
    protected $date;
    protected $orari;
    protected $sala;
    
    public function __construct($_film, $_date, $_orari, $_sala) {
      $this->film = $_film;
      $this->date = $_date;
      $this->orari = $_orari;
      $this->sala = $_sala;
    }

    public function getData() {
      return $this->date;
    }

    public function getOrari() {
      return $this->orari;
    }
  }