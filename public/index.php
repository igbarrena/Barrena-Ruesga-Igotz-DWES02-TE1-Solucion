<?php
declare(strict_types=1);

function request(): void
{   
    $controller = new VehicleController();
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    if ($method === "GET") {
        $controller->getById($_GET['id'] ?? null);
    }
    else if ($method === "POST") {
        $controller->store($_POST['jsonPost'] ?? null);
    }
}

request();
