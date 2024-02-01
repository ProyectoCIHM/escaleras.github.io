<?php
require '../modelo/modelo_vista.php';
header("Content-type: application/json; charset=utf-8");
$modelo1 = new modelo_vista();
//$modelo2 = new modelo_consultas();
//$arreglo  = $_REQUEST['datos']; //"configEntorno";
$control = "";
$error   = false;
$accion = $_REQUEST['variables'];
//echo $arreglo;

try {

	switch ($accion) {

		case "insertar_escalera":
			$control = $modelo2->insertarEscalera();
			echo json_encode($control);
			break;



			//Para vista
		case "agregar_escalera":
			$control = $modelo1->agregar_escalera();
			echo json_encode($control);
			break;

		case "1":
			$control = $modelo1->escaleras_form();
			echo json_encode($control);
			break;

			//case "name":
			//	$control = $modelo1->Activos();
			//	echo json_encode($control);
			//	break;







	}
} catch (Exception $e) {

	$control = "Problemas con el modelo";
	$error   = true;
}
