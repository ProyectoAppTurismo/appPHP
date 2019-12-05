<?php

class BaseDatos extends SQLite3{
	function __construct()
	{
		$this->open("Destinos_2.sqlite");
	}
}
	$bd=new BaseDatos();
	if($bd){
		echo "<p>La base de datos se abrió corectamente.</p>";
	}else{
		echo "<p>La base de datos no se abrió corectamente.</p>";
	}


?>