<?php

/**
 * Classe Connexio
 */
class Connexio {
    //Dades de la connexió a la base de dades la_meva_botiga.
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";
    
    /**
     * Función per obtenir una connexió a la base de dades.
     * Aquesta funció estableix una connexió amb la base de dades utilitzant els paràmetres de configuració especificats.
     * 
     * @return object Retorna un objecte de connexió a la base de dades.
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
