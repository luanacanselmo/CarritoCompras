<?php
require_once("bd.php"); // Asumiendo que bd.php contiene la conexión PDO

include("administrador/template/cabecera.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$txtPrecio = (isset($_POST['txtPrecio'])) ? $_POST['txtPrecio'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
$txtCategoria = (isset($_POST['txtCategoria'])) ? $_POST['txtCategoria'] : "";




switch ($accion) {
    case "Agregar":
        $sentenciaSQL = $conexion->prepare("INSERT INTO productos (nombre, precio, imagen, categoria) VALUES (:nombre, :precio, :imagen, :categoria);");

        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':precio', $txtPrecio);

        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen != "") {
            // Cambiar ruta a $_SERVER['DOCUMENT_ROOT'] para asegurarse de que sea absoluta
            $rutaDestino = $_SERVER['DOCUMENT_ROOT'] . "/emeyce/img/" . $nombreArchivo;  // Asegúrate de que "emeyce" es tu carpeta raíz

            // Intentar mover la imagen
            if (move_uploaded_file($tmpImagen, $rutaDestino)) {
                echo "Imagen subida correctamente.";
            } else {
                echo "Error al subir la imagen. Revisa la ruta y los permisos.";
            }
        }


        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->bindParam(':categoria', $txtCategoria);

        $sentenciaSQL->execute();
        header("Location: productos2.php");
        break;

    case "Modificar":
        $sentenciaSQL = $conexion->prepare("UPDATE productos SET nombre=:nombre, precio=:precio, categoria=:categoria WHERE id_producto=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':precio', $txtPrecio);
        $sentenciaSQL->bindParam(':categoria', $txtCategoria);

        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {
            $fecha = new DateTime();
            $nombreArchivo = $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"];
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

            if (move_uploaded_file($tmpImagen, $_SERVER['DOCUMENT_ROOT'] . "/img/" . $nombreArchivo)) {
                $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id_producto=:id");
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
                $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if (isset($producto["imagen"]) && ($producto["imagen"] != "imagen.jpg")) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/img/" . $producto["imagen"])) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . "/img/" . $producto["imagen"]);
                    }
                }

                $sentenciaSQL = $conexion->prepare("UPDATE productos SET imagen=:imagen WHERE id_producto=:id");
                $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
            }
        }
        header("Location: productos2.php");
        break;

    case "Cancelar":
        header("Location: productos.php");
        break;

    case "Seleccionar":
        $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id_producto=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $producto['nombre'];
        $txtPrecio = $producto['precio'];
        $txtImagen = $producto['imagen'];
        $txtCategoria = $producto['categoria'];

        break;

    case "Borrar":
        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id_producto=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($producto["imagen"]) && ($producto["imagen"] != "imagen.jpg")) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/img/" . $producto["imagen"])) {
                unlink($_SERVER['DOCUMENT_ROOT'] . "/img/" . $producto["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM productos WHERE id_producto=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        header("Location: productos2.php");
        break;
}
$sentenciaSQL = $conexion->prepare("
    SELECT p.*, c.nombre_categoria 
    FROM productos p
    JOIN categoria c ON p.categoria = c.id_categoria
");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: bold;
        }

        .btn-group .btn {
            border-radius: 20px;
        }

        .table {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .img-thumbnail {
            border-radius: 10px;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-action {
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4 ">Administración de Productos</h2>
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="card-header">
                        Datos del producto
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="txtID" class="form-label">Id:</label>
                                <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
                            </div>

                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del producto">
                            </div>

                            <div class="mb-3">
                                <label for="txtPrecio" class="form-label">Precio:</label>
                                <input type="text" class="form-control" value="<?php echo $txtPrecio; ?>" name="txtPrecio" id="txtPrecio" placeholder="Precio del producto">
                            </div>

                            <div class="mb-3">
                                <label for="txtCategoria" class="form-label">Elige una categoría:</label>
                                <select id="txtCategoria" name="txtCategoria" class="form-control">
                                    <?php
                                    // Consulta para obtener las categorías
                                    $sql = "SELECT id_categoria, nombre_categoria FROM categoria";
                                    $stmt = $conexion->query($sql);

                                    if ($stmt->rowCount() > 0) {
                                        // Generar las opciones
                                        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            // Asegúrate de que el id_categoria seleccionado esté marcado como seleccionado
                                            $selected = ($txtCategoria == $fila['id_categoria']) ? "selected" : "";
                                            echo '<option value="' . $fila['id_categoria'] . '" ' . $selected . '>' . $fila['nombre_categoria'] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">No hay categorías disponibles</option>';
                                    }
                                    ?>
                                </select>
                            </div>



                            <div class="mb-3">
                                <label for="txtImagen" class="form-label">Imagen:</label>
                                <?php if ($txtImagen != "") { ?>
                                    <img class="img-thumbnail mb-2 d-block" src="/img/<?php echo $txtImagen; ?>" width="100" alt="">
                                <?php } ?>
                                <input type="file" class="form-control" name="txtImagen" id="txtImagen">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="accion" value="Agregar" class="btn btn-success" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?>>
                                    <i class="fas fa-plus-circle"></i> Agregar
                                </button>
                                <button type="submit" name="accion" value="Modificar" class="btn btn-warning" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>>
                                    <i class="fas fa-edit"></i> Modificar
                                </button>
                                <button type="submit" name="accion" value="Cancelar" class="btn btn-secondary" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?>>
                                    <i class="fas fa-times-circle"></i> Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                <th>categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaProductos as $producto) { ?>
                                <tr>
                                    <td><?php echo $producto['id_producto']; ?></td>
                                    <td><?php echo $producto['nombre']; ?></td>
                                    <td><?php echo $producto['precio']; ?></td>

                                    <td>
                                        <img class="img-thumbnail" src="./img/<?php echo $producto['imagen']; ?>" width="50" alt="">
                                    </td>

                                    
                                    <td><?php echo $producto['nombre_categoria']; ?></td>

                                    <td>
                                        <form method="POST" class="d-inline">
                                            <input type="hidden" name="txtID" value="<?php echo $producto['id_producto']; ?>" />
                                            <button type="submit" name="accion" value="Seleccionar" class="btn btn-sm btn-primary btn-action">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="submit" name="accion" value="Borrar" class="btn btn-sm btn-danger btn-action">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>