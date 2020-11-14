<?php
    require_once "libs/dao.php";

    function getAllComunicaciones(){
        $sqlstr = "SELECT * FROM comunicaciones;";
        $resultSet = array();
        $resultSet = obtenerRegistros($sqlstr);
        return $resultSet;
    }
    
    function getComunicacionById($cmnid){
        $sqlstr = "SELECT * from comunicaciones where cmnid = %d;";
        return obtenerUnRegistro(sprintf($sqlstr, $cmnid));
    }

    function getComunicacionPorFiltro($filtro){
        $ffiltro = $filtro.'%';
        $sqlstr = "SELECT * FROM comunicaciones where cmnid like '%s';";
        return obtenerRegistros(sprintf($sqlstr, $ffiltro));
    }

    function addNewComunicacion($clientid, $cmnnotas, $cmntags, $cmnfching, $cmnusring, $cmntipo){
        $insSql = "INSERT INTO `comunicaciones` (`clientid`, `cmnnotas`, `cmntags`, `cmnfching`, `cmnusring`, `cmntipo`)
        VALUES ( '%d', '%s', '%s', '%s', '%d', '%s');";

        return ejecutarNonQuery(
            sprintf(
                $insSql,
                $clientid,
                $cmnnotas, 
                $cmntags,
                $cmnfching,
                $cmnusring,
                $cmntipo
            )
        );
    }

?>