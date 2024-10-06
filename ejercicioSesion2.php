<?php
session_start();

if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [10, 20, 30];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modificar'])) {
        $indice = $_POST['indice']; // Sin intval
        $nuevo_valor = $_POST['nuevo_valor']; // Sin intval
        $_SESSION['numeros'][$indice] = $nuevo_valor;
    } elseif (isset($_POST['promedio'])) {
        $promedio = array_sum($_SESSION['numeros']) / count($_SESSION['numeros']);
    } elseif (isset($_POST['reiniciar'])) {
        $_SESSION['numeros'] = [10, 20, 30];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar arreglo guardado en sesión</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h3 {
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Modificar arreglo guardado en sesión</h2>
    
    <form method="post" action="">
        <label for="indice">Posición a modificar:</label>
        <select name="indice" id="indice">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>

        <label for="nuevo_valor">Nuevo valor:</label>
        <input type="number" name="nuevo_valor" id="nuevo_valor" required>

        <button type="submit" name="modificar">Modificar</button>
        <button type="submit" name="promedio">Promedio</button>
        <button type="submit" name="reiniciar">Reiniciar</button>
    </form>

    <h3>Arreglo actual: <?php echo implode(", ", $_SESSION['numeros']); ?></h3>

    <?php
    if (isset($promedio)) {
        echo "<h3>Promedio: " . number_format($promedio, 2) . "</h3>";
    }
    ?>
</body>
</html>
