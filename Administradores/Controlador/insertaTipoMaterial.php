<?php
    include "../Modelo/conexion.php";
    include "../Modelo/TipoMaterialDAO.php";
    //include "../Clases/TipoMaterial.php";

    if(isset($_POST)){
        $tmDAO = new TipoMat_DAO($conn);
        $descrip = $_POST['nombre'];

        $tipoM = new TipoMaterial(1,$descrip);
        $tmDAO->insertarTipoMaterial($tipoM);
        echo "ok";
    }
?>