<?php

  class Sala {
    protected $id;
    protected $capienza;
    
    public function __construct($_numero, $_capienza) {
      $this->id = $_numero;
      $this->capienza = $_capienza;
    }

    public function getInfo() {
      return [
        $this->id,
        $this->capienza
      ];
    }
  }