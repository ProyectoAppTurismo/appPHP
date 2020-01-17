<?php
include_once 'modelo.php';



function ctrInicio(){
	include_once 'web/cabecera.html';
}
function ctrSiguiente(){
	include_once 'web/opciones.html';
}
function ctrMapa(){

}
function ctrLista(){
	modeloCrearVariables();
	modeloConsulta();
}
function ctrCerrar(){
	session_destroy();
	header('Location:index.php');
}