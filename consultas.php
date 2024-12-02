<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet"  href="estilo.css">
</head>
<body>

<?php
  


if(isset($_POST['consultas']))
{ 
    include ("conexion.php");

    
 
  $resultados = mysqli_query($conexion,"SELECT * FROM clientes");
  
  while($consultas = mysqli_fetch_array($resultados))
  {
	
    echo "
      <table width=\"50%\" border=\"1\">
        <tr>
          <td><b><center>Id</center></b></td>
          <td><b><center>Nombre</center></b></td>
          <td><b><center>email</center></b></td>
          <td><b><center>password</center></b></td>
          <td><b><center>direccion</center></b></td>
        </tr>
        <tr>

          <td>".$consultas['id']."</td>
          <td>".$consultas['nombre']."</td>
          <td>".$consultas['email']."</td>
          <td>".$consultas['password']."</td>
          <td>".$consultas['direccion']."</td>
        </tr>
      </table>
    ";
  }



}




?>

</body>
</html>