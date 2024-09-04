<?php 
require_once "ConexaoBD.php";

class TemaDAO{

    public static function consultarTema(){ 

        $sql = "select * from temas";
        
        $conexao = ConexaoBD::conectar();
        $temas = $conexao->query($sql);
        
        return $temas->fetchAll(PDO::FETCH_ASSOC);
    }
}
