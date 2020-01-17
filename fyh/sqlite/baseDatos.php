<?php

class BaseDatos extends SQLite3{
	function __construct()
	{
		$this->open("Destinos_2.sqlite");
	}

	function consultar(){
		$bd=new BaseDatos();
	if($bd){
		echo "<p>La base de datos se abrió corectamente.</p>";
	}else{
		echo "<p>La base de datos no se abrió corectamente.</p>";
	}
	$consulta=sqlite_query($bd, "SELECT nombre FROM destinos_definitivo_modificado");
	$resultado = sqlite_fetch_all($consulta, SQLITE_ASSOC);
	foreach($resultado as $valor){
		echo $valor;
	}

	}
	
}


?>