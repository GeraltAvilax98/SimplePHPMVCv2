<?php
    require_once "models/mnt/comunicaciones.model.php";

    function run(){
        $viewData = array();
        $viewData["mode"] = "";
        $viewData["modedsc"] = "";
        $viewData["cmnid"] = 0;
        $viewData["cmnfching"] = "";
        $viewData["clientid"] = "";
        $viewData["cmntipo"] = "ADM";

        $viewData["cateest_ADM"] = "selected";
        $viewData["cateest_COM"] = "";

        $modedsc = array(
            "INS" => "Nueva Comunicacion",
            "DSP" => "Detalle de Comunicacion %s"
        );

        if(isset($_GET["mode"])){
            $viewData["mode"] = $_GET["mode"];
            $viewData["cmnid"] = intval($_GET["cmnid"]);

            if(!isset($modedsc[$viewData["mode"]])){
                redirectWithMessage("No se puede realizar esta operación.", "index.php?page=comunicaciones");
                die();
            }
        }

        if(isset($_POST["btnsubmit"])){
            mergeFullArrayTo($_POST, $viewData);
            
            if(!(isset($_SESSION["com_csstoken"]) && $_SESSION["com_csstoken"] == $viewData["xsstoken"])){
                redirectWithMessage("No se puede realizar esta operación.", "index.php?page=comunicaciones");
                die();
            }
            
            switch($viewData["mode"]){
                case "INS":
                    $result = addNewComunicacion(
                        $viewData["clientid"],
                        $viewData["cmnnotas"],
                        $viewData["cmntags"],
                        $viewData["cmnfching"],
                        $viewData["cmnusring"],
                        $viewData["cmntipo"]
                    );
                    if($result > 0){
                        redirectWithMessage("Guardado Exitosamente.", "index.php?page=comunicaciones");
                        die(); 
                    }
                break;  
            }
        }

        if($viewData["mode"] === "INS"){
            $viewData["modedsc"] = $modedsc[$viewData["mode"]];
        }else{
            $comunicacionDBData = getComunicacionById($viewData["cmnid"]);
            mergeFullArrayTo($comunicacionDBData, $viewData);

            $viewData["modedsc"] = sprintf($modedsc[$viewData["mode"]], $viewData["cmnid"]);

            $viewData["cmntipo_ADM"] = ($viewData["cmntipo"]=="ADM")?"selected":"";
            $viewData["cmntipo_COM"] = ($viewData["cmntipo"]=="COM")?"selected":"";
        }

        $viewData["xsstoken"] = uniqid("com", true);
        $_SESSION["com_csstoken"] = $viewData["xsstoken"];
        renderizar("mnt/comunicacion", $viewData);
    }

    run();
?>