<?php
namespace App\Controllers;
use App\Models\Vehiculo;
use App\Models\Coche;
use App\Models\Moto;

class VehicleController {
    
    public function store($vehiculoData): ?Vehiculo{
        
        return null;       
    }

    public function getById($id): ?Vehiculo
    {
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
        return vehiculos;
    }

}



