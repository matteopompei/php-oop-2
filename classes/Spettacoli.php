<?php
  class Spettacoli {

    protected $film;
    protected $date;
    protected $orari;
    protected $sala;
    
    public function __construct() {
      this->film = $_film;
      this->date = $_date;
      this->orari = $_orari;
      this->sala = $_sala;
    }
  }