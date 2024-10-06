<?php
session_start();

if (!isset($_SESSION['empleado'])) {
    $_SESSION['empleado'] = '';
}
if (!isset($_SESSION['milk'])) {
    $_SESSION['milk'] = 0;
}
if (!isset($_SESSION['soft_drink'])) {
    $_SESSION['soft_drink'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_empleado = $_POST['nombre_empleado'];
    $producto_seleccionado = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    $_SESSION['empleado'] = $nombre_empleado;

    if (isset($_POST['agregar'])) {
        if ($producto_seleccionado === 'milk') {
            $_SESSION['milk'] += $cantidad;
        } elseif ($producto_seleccionado === 'soft_drink') {
            $_SESSION['soft_drink'] += $cantidad;
        }
    } elseif (isset($_POST['quitar'])) {
        if ($producto_seleccionado === 'milk') {
            if ($_SESSION['milk'] >= $cantidad) {
                $_SESSION['milk'] -= $cantidad;
            } else {
                echo "error";
            }
        } elseif ($producto_seleccionado === 'soft_drink') {
            if ($_SESSION['soft_drink'] >= $cantidad) {
                $_SESSION['soft_drink'] -= $cantidad;
            } else {
                echo "error";
            }
        }
    } elseif (isset($_POST['reiniciar'])) {
        $_SESSION['milk'] = 0;
        $_SESSION['soft_drink'] = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Supermercado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        h3 {
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Gestión de Supermercado</h2>
    
    <form method="post" action="">
        <label for="nombre_empleado">Nombre del empleado:</label>
        <input type="text" name="nombre_empleado" id="nombre_empleado" value="<?php echo $_SESSION['empleado']; ?>" required>
        
        <label for="producto">Seleccionar producto:</label>
        <select name="producto" id="producto">
            <option value="milk">Leche</option>
            <option value="soft_drink">Bebida Gaseosa</option>
        </select>
        
        <label for="cantidad">Cantidad del producto:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>
        
        <button type="submit" name="agregar">Agregar</button>
        <button type="submit" name="quitar">Quitar</button>
        <button type="submit" name="reiniciar">Reiniciar</button>
    </form>
    
    <h3>Inventario:</h3>
    <p>Empleado: <?php echo $_SESSION['empleado']; ?></p>
    <p>Unidades de leche: <?php echo $_SESSION['milk']; ?></p>
    <p>Unidades de bebida gaseosa: <?php echo $_SESSION['soft_drink']; ?></p>
</body>
</html>
