<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\VehicleController;
function request(): void
{   
    $controller = new VehicleController();
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    if ($method === "GET") {
        $vehiculo = $controller->getById($_GET['id'] ?? null);
        require __DIR__ . '/../app/Views/vehiculo_get.php';
    }
    else if ($method === "POST") {
        $vehiculoData = json_decode($_POST['jsonPost'], true);
        $vehiculos = $controller->store($vehiculoData);
        require __DIR__ . '/../app/Views/vehiculo_post.php';
    }
}

request();
