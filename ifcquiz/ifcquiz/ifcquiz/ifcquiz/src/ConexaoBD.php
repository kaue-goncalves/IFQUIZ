<?php

class ConexaoBD{

    public static function conectar():PDO{
        $conexao = new PDO("mysql:host=172.16.1.85;dbname=ifquiz","Aluno","Coringa");
        return $conexao;
    }
}