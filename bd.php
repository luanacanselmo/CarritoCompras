<?php 

try {
    // Crear una nueva conexión PDO
    $conexion = new PDO("mysql:host=localhost;port=3307;dbname=emprenem", "root", "");

    // Configurar PDO para que lance excepciones en caso de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar y ejecutar la consulta SQL
    $stmt = $conexion->query('SELECT * FROM usuario');

    // Crear un array para guardar los usuarios
    $usuarios = array();

    // Obtener los resultados de la consulta y guardarlos en el array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $usuarios[] = $row;
    }

    // Liberar recursos (PDO se encarga automáticamente de cerrar la conexión al final del script)

} catch (PDOException $e) {
    // Mostrar el error en caso de que falle la conexión o la consulta
    echo "Error: " . $e->getMessage();
}
