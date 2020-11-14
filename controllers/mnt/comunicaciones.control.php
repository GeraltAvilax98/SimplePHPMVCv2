<?php
    require_once "models/mnt/comunicaciones.model.php";

    function run(){
        $viewData = array();
        $viewData["com_txtfilter"] = "";

        if(isset($_SESSION["com_txtfilter"])){
            $viewData["com_txtfilter"] = $_SESSION["com_txtfilter"];
        }

        if(isset($_POST["btnFiltrar"])){
            mergeFullArrayTo($_POST, $viewData);
            $_SESSION["com_txtfilter"] = $viewData["com_txtfilter"];
        }

        if($viewData["com_txtfilter"] === ""){
            $viewData["comunicaciones"] = getAllComunicaciones();
        }else{
            $viewData["comunicaciones"] = getComunicacionPorFiltro($viewData["com_txtfilter"]);
        }

        renderizar("mnt/comunicaciones", $viewData);
    }

    run();
?>