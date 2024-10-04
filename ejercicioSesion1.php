<?php
session_start();


if (!isset($_SESSION["sofDrink"])) {
    $_SESSION["sofDrink"] = 0;
}

if (!isset($_SESSION["milk"])) {
    $_SESSION["milk"] = 0;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $worker = $_POST["name"];
    $quantity = $_POST["quantity"];
    $product = $_POST["product"];
    $_SESSION["name"] = $worker;

    if (isset($_POST["add"])) {
        switch ($product) {
            case "milk":
                $_SESSION["milk"] += $quantity;
                break;
            case "softdrink":
                $_SESSION["softDrink"] += $quantity;
                break;
            default:
                echo  "<br><font color='red'><p>Error</p></font>";
        }
    } elseif (isset($_POST["remove"])) {
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicioSesion1.php" method="post">
        <h1>Supermarket management</h1>
        <label for="name">Worker name</label>
        <input type="text" name="name" id="name" value=<?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : ''; ?> required>

        <h1>Choose product</h1>
        <select name="product" id="product">
            <option value="softDrink">Soft drink</option>
            <option value="milk">Milk</option>
        </select>

        <label for="quantity">
            <h1>Product quantity:</h1>
        </label>
        <input type="number" name="quantity" min="0" max="100" required>
        <input type="submit" name="add" id="add" value="Add">
        <input type="submit" name="remove" id="remove" value="Remove">
        <input type="submit" name="reset" id="reset" value="Reset">
    </form>

    <h1>Inventory:</h1>
    <p>Worker: <?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : ''; ?></p>
    <p>Units of Milk: <?php echo $_SESSION["milk"]; ?></p>
    <p>Units of Soft Drink: <?php echo $_SESSION["sofDrink"]; ?></p>
</body>

</html>