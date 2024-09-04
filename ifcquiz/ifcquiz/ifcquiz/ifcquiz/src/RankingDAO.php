<?php
session_start();
require_once "ConexaoBD.php";

class RankingDAO
{

    static function cadastrar()
    {
        $conexao = ConexaoBD::conectar();
        $pontuacao = $_SESSION['pontos'];
        $nomeJogador = $_GET['nomeJogador'];

        $sql = "insert into ranking (pontuacao, nomeJogador) values ('$pontuacao', '$nomeJogador')";
        $conexao->exec($sql);
    }

    public static function consultarRanking()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "select * from ranking order by pontuacao desc";
        return $conexao->query($sql);
    }
}
