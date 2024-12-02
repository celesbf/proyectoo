<html>

<head>

<link rel="stylesheet"  href="estilo.css">
</head>
<body>
  

		<?php
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$direccion= $_POST['direccion'];

				$campos = array();

				if($nombre == ""){
					array_push($campos, "ingrese un nombre");
				}

				if($password == "" || strlen($password) < 5){
					array_push($campos, "el password no puede estar vacío, ni tener menos de 5 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "ingresa un email válido.");
				}

				if($direccion==""){
					array_push($campos,"ingrese una direccion");
				}
				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					$archivo = 'menu.php';
					echo "
						
						<a href=".$archivo.">toque aqui para comprar </a><br>
						
						
						";
				}
				"</div>";
			};
include "conexion.php";
$consulta = "INSERT INTO clientes (nombre,email,password,direccion) VALUES( '$nombre','$email','$password','$direccion')";

$resultado = mysqli_query($conexion,$consulta);
if($resultado){
    echo "Registro Exitoso";
}
else{
    echo "error al registrar";
}

include "conexionclose.php";

			


			
		?>


</body>
</html>