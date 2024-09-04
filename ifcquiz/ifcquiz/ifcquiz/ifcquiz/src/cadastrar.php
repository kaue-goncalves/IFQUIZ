<?php 
    require_once "QuestoesDAO.php";

    QuestoesDAO::cadastrar();

    header("location:../form-cadastro.php");

?>
