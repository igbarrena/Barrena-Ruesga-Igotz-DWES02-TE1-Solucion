<?php
namespace App\Models;
class Vehiculo
{
    public int $id;
    public string $marca;
    public string $modelo;
    public int $anio;
    public string $tipo;
    function __construct(int $id = 0, string $tipo = "", string $marca = "", string $modelo = "", int $anio = 0)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }
}
