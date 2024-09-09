<?php

class ConexaoBD{

    public static function conectar():PDO{
        $conexao = new PDO("mysql:host=localhost;dbname=ifquiz","root","Batman");
        return $conexao;
    }
}