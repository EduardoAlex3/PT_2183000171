<?php
include "../Controlador/Clases/TipoMaterial.php";
    class TipoMat_DAO{
        public $conexion;

        public function __construct($conn){
            $this->conexion = $conn;
        }
        public function __destruct(){}

        public function insertarTipoMaterial(TipoMaterial $tm){
            $descripcion = $tm->getDescripcion();

            $stm = $this->conexion->prepare("
                INSERT INTO tipoMaterial (Descripcion) values (?);");

            $stm->bind_param("s",$descripcion);
            $stm->execute();
            $stm->close();
        }
    }
?>