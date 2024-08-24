<?php
class Propiedad {
    public function getAll() {
        global $mysqli;
        $result = $mysqli->query('SELECT * FROM propiedades');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
