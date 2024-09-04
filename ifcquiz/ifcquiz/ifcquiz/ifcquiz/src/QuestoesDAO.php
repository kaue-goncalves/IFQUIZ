<?php 
require_once "ConexaoBD.php";

class QuestoesDAO{
   
    static function cadastrar(){
        $conexao = ConexaoBD::conectar();
        $questao = $_GET['questao'];
        $opcaoA = $_GET['opcaoA'];
        $opcaoB = $_GET['opcaoB'];
        $opcaoC = $_GET['opcaoC'];
        $opcaoD = $_GET['opcaoD'];
        $resposta = $_GET['resposta'];

        $sql = "insert into questoes (questao, opcaoA, opcaoB, opcaoC, opcaoD, resposta, idtema) values ('$questao', '$opcaoA','$opcaoB','$opcaoC','$opcaoD','$resposta','3')";
        $conexao->exec($sql);

    }

    public static function consultarQuestoes(){
    
        $sql = "select * from questoes";
        
        $conexao = ConexaoBD::conectar();
        $questoes = $conexao->query($sql);
        
        return $questoes->fetchAll(PDO::FETCH_ASSOC);
    }

}