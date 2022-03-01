<?php

  class Sala4D extends Sala {
    protected $vibrazione;
    protected $fumo;
    protected $acqua;

    public function __construct($_numero, $_capienza, $_vibrazione, $_fumo, $_acqua) {
      parent::__construct($_numero, $_capienza);
      $this->vibrazione = $_vibrazione;
      $this->fumo = $_fumo;
      $this->acqua = $_acqua;
    }
  }