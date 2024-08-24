<?php
class PropiedadesController {
    public function index() {
        $propiedadModel = new Propiedad();
        $propiedades = $propiedadModel->getAll();
        include 'views/propiedades.php';
    }
}
