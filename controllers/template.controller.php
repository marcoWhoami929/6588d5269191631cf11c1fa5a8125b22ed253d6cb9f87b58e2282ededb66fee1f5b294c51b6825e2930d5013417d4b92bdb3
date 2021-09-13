<?php


class ControladorPlantilla
{

	public function plantilla()
	{

		include "views/template.php";
	}


	public static function ctrEstiloPlantilla()
	{

		$tabla = "plantilla";

		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;
	}
}
