<?php
    // Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "almacenrestaurantes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
?>