<?php

function run(){
    $viewData = array(
        "cuenta"=>"0801-1998-15276",
        "nombre"=>"Melvin Palma",
        "correo"=>"melvingerard98@gmail.com"
    );
    $proyectos = array(
        array("id"=>"1", "name"=>"Preparatoria"),
        array("id"=>"2", "name"=>"Primaria"),
        array("id"=>"3", "name"=>"Secundaria"),
        array("id"=>"4", "name"=>"Bachiller tecnico en computacion"),
        array("id"=>"5", "name"=>"Ultimo año Ingenieria en Ciencias de la Computación")
    );
    $viewData["proyectos"] = $proyectos;
    renderizar("about", $viewData);
}

run();
?>