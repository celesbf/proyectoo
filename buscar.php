
<head>
<link rel="stylesheet"  href="estilo.css">
</head>

<?php

if (isset($_POST['buscar'])) {
    
    include("conexion.php");

    
    $nombre = $_POST['nombre'];

   
    if (empty($nombre)) {
        echo "Por favor ingresa un nombre.";
    } else {
        
        $resultados = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre = '$nombre'");

       
        if (mysqli_num_rows($resultados) > 0) {
            echo "<table width='100%' border='1'>
                    <tr>
                        <td><b><center>Nombre</center></b></td>
                        <td><b><center>Dirección</center></b></td>
                        <td><b><center>Email</center></b></td>
                    </tr>";

            
            while ($consulta = mysqli_fetch_array($resultados)) {
                echo "<tr>
                        <td>" . $consulta['nombre'] . "</td>
                        <td>" . $consulta['direccion'] . "</td>
                        <td>" . $consulta['email'] . "</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            
            echo "No se encontraron resultados para el nombre '$nombre'.";
        }
    }

    
    include("conexionclose.php");
}
?>
