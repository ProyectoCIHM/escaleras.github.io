<?php
/*
* Se  crea la funcion para hacer la conexion a la BD con el nombre de proy_cihm
* @author: Figueroa Chavez Aimee Amairani
* @since: Enero 2024
* @param:  variable $servidor - Referencia la direccion del servidor y el puerto
* @param: variable $database - Nombre de la base de datos.
* @param: variable $usuario - Usuario con el que se entra a la BD
* @param: variable password - Contraseña para ingresar a la BD
*/

function conexion(){
	$servidor= "localhost:3306";
	$database="proy_cihm";
	$usuario="root";
	$password="";

	$conn= mysqli_connect ( $servidor, $usuario, $password, $database);


	if(!$conn){
		die("Conexión fallida: " .mysqli_connect_error());

	echo "FALLO";
	}
	else{

		echo  "Conexión Exitosa" . "<p>";
		return $conn;
	}
}
