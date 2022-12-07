<?php
   include "../Modelo/conexion.php";
    session_start();
    //if (isset($_SESSION['login']) && isset($_SESSION['login'] == 1)) {
    if(isset($_SESSION['login'])){
      //echo $_SESSION['login'];
      echo "ok";
    }else{
      echo "error";
    }
?>