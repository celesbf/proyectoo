

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Menú de la Pastelería</title>

    
    <link rel="stylesheet"  href="estilo.css">


        

</head>
<body>

<?php

$productos = [
    ["nombre" => "Torta de Chocolate", "precio" => 10000, ],
    ["nombre" => "Tarta de Frutillas", "precio" => 9500, ],
    ["nombre" => "Chocotorta", "precio" => 8000, ],
    ["nombre" => "Alfajor de Maicena", "precio" => 5000,],
    ["nombre" => "Torta Brownie", "precio" => 9000,],
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($productos as $key => $producto) {
        if (isset($_POST["cantidad_$key"]) && $_POST["cantidad_$key"] > 0) {
            $cantidad = intval($_POST["cantidad_$key"]);
            $total = $cantidad * $producto["precio"];
            echo "<p>Has comprado $cantidad de {$producto['nombre']} por un total de \$$total.</p>";
            


        }
    }
    exit;
}
?>
<h1>Pastelería</h1>
<p><h2>Menú:<h2></p>

<form method="post">
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php foreach ($productos as $key => $producto): ?>
        <tr>
            <td>
                
                <?php echo $producto['nombre']; ?>
            </td>
            <td>$<?php echo $producto['precio']; ?></td>
            <td>
                <input type="number" name="cantidad_<?php echo $key; ?>" min="0" value="0">
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button type="submit">Comprar</button>
</form>

</body>
</html>
