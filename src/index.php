<?php
// Coger datos del archivo .env
$host = 'database';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');

echo "<h1>Trabajo Despliegue - Pablo</h1>";

// Probar conexion
$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    echo "Error al conectar: " . $conn->connect_error;
} else {
    echo "Conexion correcta a la base de datos: " . $db_name;
}

$conn->close();
?>
