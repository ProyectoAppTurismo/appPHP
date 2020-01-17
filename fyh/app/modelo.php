<?php
include_once 'sqlite/baseDatos.php';

function modeloCrearVariables(){
	$compañia=$_GET['company'];
	$tipo=$_GET['tipo'];
	$precio=$_GET['precio'];
	$afluencia=$_GET['afluencia'];
	$tipotur=$_GET['categoria'];
}
function modeloConsulta(){
	$compañia=$_GET['company'];
	BaseDatos::consultar($compañia);

}

