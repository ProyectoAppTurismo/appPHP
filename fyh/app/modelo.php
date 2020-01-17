<?php


function modeloCrearVariables(){
	$_SESSION['cia']=$_GET['cia'];
	$_SESSION['tipo']=$_GET['tipo'];
	$_SESSION['precio']=$_GET['precio'];
	$_SESSION['afluencia']=$_GET['afluencia'];
	$_SESSION['tipotur']=$_GET['tipotur'];
}
function modeloConsulta(){
	include_once 'sqlite/baseDatos.php';
	BaseDatos::Consulta();
}

