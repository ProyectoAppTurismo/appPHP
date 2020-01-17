<?php
session_start();

include_once 'app/controlador.php';
include_once 'app/modelo.php';


 $rutaUsuario=[
"Inicio"        => "ctrInicio",
"siguiente"     => "ctrSiguiente",
"mapa"          => "ctrMapa",
"lista"         => "ctrLista",
"cerrar"        => "ctrCerrar"
 ];

if(!isset($_SESSION['user'])){
    $procedimiento="ctrInicio";
    $_SESSION['user']="Admin"; 
}else{
    if(isset($_GET['orden'])){
        if(isset($rutaUsuario[$_GET['orden']])){
            $procedimiento=$rutaUsuario[$_GET['orden']];
        }else{
             header('Status: 404 Not Found');
                echo '<html><body><h1>Error 404: No existe la ruta <i>' .
                    $_GET['ctl'] .
                    '</p></body></html>';
                    exit;
        }
    }else{
    $procedimiento="ctrInicio";
    }

}

$procedimiento();
print_r($_REQUEST);
print_r($_SESSION);

?>


