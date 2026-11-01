<?php
namespace App\Models;

class Moto extends Vehiculo
{
    public bool $sidecar;
    function __construct(int $id = 0, string $tipo = "", string $marca = "", string $modelo = "", int $anio = 0, bool $sidecar = true)
    {
        parent::__construct($id, $tipo, $marca, $modelo, $anio);
        $this->sidecar = $sidecar;
    }
}
