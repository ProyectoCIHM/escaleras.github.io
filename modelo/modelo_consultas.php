<?php

include ("conexion.php");
$conn2 = conexion();
$clase = new modelo_consultas($conn2);

class modelo_consultas{
           public function __construct($conn2){
            $conexion = $conn2;
            $this->conexion = $conexion;
        }


 public function insertarEscalera(){
    $conn2 = $this->conexion;
					//$agregar = "INSERT into opeSalas values('$idsala', '$nombresala', '$idoperador')";
					//$peticion6 = mysqli_query($conn2, $agregar);
					//$extraido = mysqli_fetch_array($peticion6);
					//echo "Ya me agregue";
					//return $agregarOperador;




 }
