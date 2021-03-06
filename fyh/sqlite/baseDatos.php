<?php

class BaseDatos extends SQLite3
{

    function __construct()
    {
        $this->open("sqlite/Destinos_BD.db");
    }

    function Consulta()
    {
        $bd = new BaseDatos();
        if (! $bd) {
            echo "la base de datos no se pudo abrir correctamente";
        }

        $consulta = "SELECT d_nombre, d_descripcion FROM Destinos WHERE d_compania= :cia AND d_tipo= :tipo AND d_precio= :precio AND d_afluencia= :afluencia AND d_tipo_turismo= :tipotur";
        $resultado = $bd->prepare($consulta);
        $resultado->bindValue(':cia', $_SESSION['cia']);
        $resultado->bindValue(':tipo', $_SESSION['tipo']);
        $resultado->bindValue(':precio', $_SESSION['precio']);
        $resultado->bindValue(':afluencia', $_SESSION['afluencia']);
        $resultado->bindValue(':tipotur', $_SESSION['tipotur']);
        $result = $resultado->execute();
        // echo "VersiÃ³n de SQLite : ". sqlite_libversion();
        // echo "VersiÃ³n de PHP : ". phpversion();
        if (! $result)
            die("No se puede ejecutar la consulta.");
        $contador = 1;
        while ($fila = $result->fetchArray()) {

            echo "<h3>".$contador . ".-" . $fila['d_nombre'] . "</h3>";
            echo "<p>".$fila['d_descripcion'] . "</p>";
            echo "<a href='https://www.google.es/maps/place/".$fila['d_nombre']."'><img src='web/imgs/".$fila['d_nombre'].".jpg' height='300' width='500'></a><br>";
            echo "<a href='https://www.google.es/maps/place/".$fila['d_nombre']."'>Ver en mapa</a><br>";
            $contador ++;
        }

        $bd->close();
    }
}
?>
