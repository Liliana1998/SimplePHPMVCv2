<?php   

function  run(){
    $viewData = array(
        "Cuenta" => "1709199800658",
        "Nombre" => "Liliana Gabriela Ochoa Banegas",
        "Correo" => "lilianagochoa58@gmail.com"
    );
    $Proyectos = array(
        array("id" =>"1", "name"=> "Negocios CMS"),
        array("id" =>"2", "name"=> "Negocios ERP"),
        array("id" =>"3", "name"=> "Negocios RRHH")
    );
    $viewData["Proyectos"] = $Proyectos;

    $DatosPersonales = array(
        array("id" => "Lugar Nacimiento:","name"=> "San Lorenzo Valle"),
        array("id" => "Fecha Nacimiento:", "name" => " 19 de mayo de 1998"),
        array("id" => "Estado Civil:","name" => "Soltera"),
        array("id" => "N Identidad:", "name" => "1709-1998-00658"),
        array("id" => "Nacionalidad:", "name" => "Hondureña"),
        array("id" => "Correo:", "name" => "lilianagochoa58@gmail.com"),
        array("id" => "Telefono:", "name" => "9763-3314")

    );
    $viewData["DatosPersonales"] = $DatosPersonales;


    $EstudiosAcademicos = array(
            array("id" =>"Educacion Primaria", "name"=> "Instituto Evangelica La Esperanza  Choluteca Honduras"),
            array("id" =>"Eduacion Secundaria", "name"=> "Intituto José Cecilio del Valle  Choluteca Honduras"),
            array("id" =>"Diversificado", "name"=> "Instituto Tecnico Vocacional del Sur  Choluteca Honduras"),
            array("id" =>"Titulo Obtenido", "name"=> "Bachillerato Tecnico Profesional en Informatica"),
            array("id" =>"Eduacion Superior", "name"=> "Pasante de la carrera Ciencias de la Computacion Universidad Catolica de Honduras")
           
        );
    $viewData["EstudiosAcademicos"] = $EstudiosAcademicos;


    renderizar("about",$viewData);
}
run();
?>