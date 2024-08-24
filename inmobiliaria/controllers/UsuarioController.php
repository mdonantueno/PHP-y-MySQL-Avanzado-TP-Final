<?php
class UsuarioController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            if ($usuario === 'admin' && $password === 'admin') {
                $_SESSION['loggedin'] = true;
                header('Location: index.php');
            } else {
                $error = 'Usuario o contraseña incorrectos';
            }
        }
        include 'views/login.php';
    }
}
