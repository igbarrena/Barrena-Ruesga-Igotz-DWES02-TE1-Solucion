<?php
namespace App\Controllers;
use App\Models\Vehiculo;
use App\Models\Coche;
use App\Models\Moto;

class VehicleController {
    
    public function store($vehiculoData): array{
        $vehiculos = $this->leerVehiculos();

            if ($vehiculoData["tipo"] === "coche") {
                $coche = new Coche(
                    $vehiculoData["id"],
                    $vehiculoData["tipo"],
                    $vehiculoData["marca"],
                    $vehiculoData["modelo"],
                    $vehiculoData["anio"],
                    $vehiculoData["puertas"]
                );
                $vehiculos [] = $coche;
            } elseif ($vehiculoData["tipo"] === "moto") {
                $moto = new Moto(
                    $vehiculoData["id"],
                    $vehiculoData["tipo"],
                    $vehiculoData["marca"],
                    $vehiculoData["modelo"],
                    $vehiculoData["anio"],
                    $vehiculoData["sidecar"]
                );
                $vehiculos [] = $moto;
            }        
        return $vehiculos;       
    }

    public function getById($id): ?Vehiculo
    {
        $vehiculos = $this->leerVehiculos();
        foreach ($vehiculos as $vehiculo) {
            if ($vehiculo->id === (int)$id) {
                return $vehiculo;
            }
        }
        return null;  
    }
    
    private function leerVehiculos(){
        require_once __DIR__ . '/../../src/vehiculos_bbdd.php';
        $vehiculos = [];
        foreach (VEHICULOS as $vehiculo) {
            if ($vehiculo['tipo'] === 'coche') {
                $coche = new Coche(
                    $vehiculo['id'],
                    $vehiculo['tipo'],
                    $vehiculo['marca'],
                    $vehiculo['modelo'],
                    $vehiculo['anio'],
                    $vehiculo['puertas']
                );
                $vehiculos[] = $coche;
            } elseif ($vehiculo['tipo'] === 'moto') {
                $moto = new Moto(
                    $vehiculo['id'],
                    $vehiculo['tipo'],
                    $vehiculo['marca'],
                    $vehiculo['modelo'],
                    $vehiculo['anio'],
                    $vehiculo['sidecar']
                );
                $vehiculos[] = $moto;
            }
        }
        return $vehiculos;
    }

}



