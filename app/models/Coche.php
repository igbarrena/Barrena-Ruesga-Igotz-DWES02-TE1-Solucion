<?php
namespace App\Models;

class Coche extends Vehiculo
{
    public int $puertas;
    function __construct(int $id = 0, string $tipo = "", string $marca = "", string $modelo = "", int $anio = 0, int $puertas = 0)
    {
        parent::__construct($id, $tipo, $marca, $modelo, $anio);
        $this->puertas = $puertas;
    }
}