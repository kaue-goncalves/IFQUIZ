<?php
require_once "ConexaoBD.php";

class RankingDAO{

    static function cadastrar(){
        $conexao = ConexaoBD::conectar();
        $campo1 = $_GET['campo1'];
        $campo2 = $_GET['campo2'];
        $sql = "insert into tabela (campo1, campo2) values ('$campo1','$campo2')";
        $conexao->exec($sql);
        
        
    }

    static function listar(){
        $conexao = ConexaoBD::conectar();

        $sql = "SELECT * FROM ranking";

        $ranking = $conexao->query($sql);

        return $ranking->fetchAll(PDO::FETCH_ASSOC);
    }   
}