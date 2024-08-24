<?php
session_start();
require 'config/database.php';
require 'controllers/InicioController.php';
require 'controllers/PropiedadesController.php';
require 'controllers/UsuarioController.php';
require 'controllers/ErrorController.php';

require 'models/Propiedad.php';
require 'models/Usuario.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'inicio';
$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

$controller = ucfirst(array_shift($url)) . 'Controller';

if (file_exists("controllers/$controller.php")) {
    require "controllers/$controller.php";
    $controller = new $controller();
    call_user_func_array([$controller, 'index'], $url);
} else {
    $errorController = new ErrorController();
    $errorController->notFound();
}
