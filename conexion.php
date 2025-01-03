<?php
// Datos de conexión
$host = "localhost"; // Servidor
$dbname = "nombre_base_datos"; // Cambia por el nombre de tu base de datos
$username = "root"; // Usuario de MySQL
$password = ""; // Contraseña de MySQL (deja vacío si usas XAMPP)

// Crear conexión
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar PDO para manejar excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
