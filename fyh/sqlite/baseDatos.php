<?php

class BaseDatos extends SQLite3{
	function __construct()
	{
		$this->open("sqlite/DESTINO.db");
	}

	function Consulta(){
	$bd=new BaseDatos();
	if(!$bd){
		echo "la base de datos no se pudo abrir correctamente";
	}
	
	$consulta="SELECT d_nombre, d_descripcion FROM DESTINO WHERE d_compania= :cia AND d_tipo= :tipo AND d_precio= :precio AND d_afluencia= :afluencia AND d_tipo_turismo= :tipotur";
	$resultado=$bd->prepare($consulta);
	$resultado->bindValue(':cia', $_SESSION['cia']);
	$resultado->bindValue(':tipo', $_SESSION['tipo']);
	$resultado->bindValue(':precio', $_SESSION['precio']);
	$resultado->bindValue(':afluencia', $_SESSION['afluencia']);
	$resultado->bindValue(':tipotur', $_SESSION['tipotur']);
	$result= $resultado->execute();
	//echo "Versión de SQLite : ". sqlite_libversion(); 
	//echo "Versión de PHP : ". phpversion();
		if (!$result)
    	die("No se puede ejecutar la consulta.");
		$contador=1;
		while($fila = $result->fetchArray()){
			
			echo $contador.": ".$fila['d_nombre']."<br>";
			echo $fila['d_descripcion']."<br>";
			$contador++;
		}

		$bd->close();

	}


}
?>