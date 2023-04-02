<?php
// Definimos la clase Ave
class Ave
{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function nadar()
    {
        return "La ave $this->nombre puede nadar.";
    }

    public function volar()
    {
        return "La ave $this->nombre puede volar.";
    }
}

class Pato extends Ave {
  public $puedeNadar = true;
  public $puedeVolar = true;

  public function __construct($nombre) {
    parent::__construct($nombre);
  }
  // métodos adicionales
}

class Condor extends Ave {
  public $puedeNadar = false;
  public $puedeVolar = true;

  public function __construct($nombre, $altura) {
    parent::__construct($nombre);
  }
  // métodos adicionales
}

class Gallina extends Ave {
  public $puedeNadar = true;
  public $puedeVolar = false;

  public function __construct($nombre) {
    parent::__construct($nombre);
  }
  // métodos adicionales
}

class Pinguino extends Ave {
  public $puedeNadar = true;
  public $puedeVolar = false;

  public function __construct($nombre, $altura) {
    parent::__construct($nombre);
  }
}