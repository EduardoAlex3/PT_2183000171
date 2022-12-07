<?php
    //include "Clases/Administrador.php";
    include "../Modelo/conexion.php";
    include "Clases/Autor.php";
    include "Clases/TipoMaterial.php";
    include "Clases/UEA.php";
    include "Clases/Temario.php";
    include "Clases/Tema.php";
    include "Clases/PalabraClave.php";
    include "Clases/Material.php";
    
    include "../Modelo/AdminDAO.php"; 

    //Hacemos instancias de nuestras Clases realizadas hasta el momento

    //Administradores
    // $admin1 = new Admin(1,"Eduardo Alejandro","Rodriguez","Cestelos","laloalex","EduardoA"); 
    //Autores
    // $autor1 = new Autor(1,"Eduardo ","Rodriguez","Cestelos");
    // $autor2 = new Autor(2,"Leonardo Daniel","Sanchez","Martinez");
    // $autores = array();
    // array_push($autores,$autor1);
    // array_push($autores,$autor2);
    //Tipo Material
    // $tipoM1 = new TipoMaterial(1,"PDF");
    // //UEA
    // $uea1 = new UEA(1,"Base de Datos","111254","Materia para ver todo lo relacionado a Bases de Datos");
    // //Temario
    // $temarioBD = new Temario (1,"BASE DE DATOS",$uea1);
    // //Tema
    // $tema1 = new Tema (1,"Bases de datos relacioneales y normalización",$temarioBD);
    // //Palabras Clave
    // $pclave1 = new PalabraClave(1,"BD");
    // $pclave2 = new PalabraClave(2,"Base de Datos");
    // $pClaves = array();
    // array_push($pClaves, $pclave1);
    // array_push($pClaves, $pclave2);
    // //Material
    // $material = new Material(1,"Diagrama Entidad Relacion","http://cidecame.uaeh.edu.mx/lcc/mapa/PROYECTO/libro14/21_introduccin_a_los_diagramas_entidad__relacin.html",
    //                         "16/09/2022",$tipoM1->getIdTipoMaterial(),
    //                         $autores,$pClaves,"1");


    // //Validamos que la impresion de todas las instancias sea correcta
    // //Tanto para sus metodos 'toString()' como para 'toJSON()'

    // echo "<h2>Administrador</h2>";
    // echo $admin1->toString(). "<br><br>";
    // echo json_encode($admin1->toJSON()). "<br><br>";
    
    // // echo "<h2>Autor</h2>";
    // // echo $autor1->toString(). "<br><br>";
    // // echo json_encode($autor1->toJSON()). "<br><br>";
    
    // // echo "<h2>Tipo Material</h2>";
    // // echo $tipoM1->toString(). "<br><br>";
    // // echo json_encode($tipoM1->toJSON()). "<br><br>";
    
    // // echo "<h2>UEA</h2>";
    // // echo $uea1->toString(). "<br><br>";
    // // echo json_encode($uea1->toJSON()). "<br><br>";
    
    // echo "<h2>Temario</h2>";
    // echo $temarioBD->toString() . "<br><br>";
    // echo json_encode($temarioBD->toJSON()). "<br><br>";

    // echo "<h2>Tema</h2>";
    // echo $tema1->toString() . "<br><br>";
    // echo json_encode($tema1->toJSON()). "<br><br>";
    
    // // echo "<h2>Palabra Clave</h2>";
    // // echo $pclave1->toString(). "<br><br>";
    // // echo json_encode($pclave1->toJSON()). "<br><br>";
    
    // echo "<h2>Material</h2>";
    // echo $material->toString() . "<br><br>";
    // // echo json_encode($material->toJSON()). "<br><br>";
    // //echo "<script> console.log(" .$material->toJSON().");</script>";

    $user="alexis";
    $contra ="a";
    $admin = new Admin(1,"Alejandro","Rodriguez","Cestelos",$user,$contra);
    $aDAO = new AdminDAO($conn);
    echo $aDAO->buscarAdmin($admin);
    ?>