<?php

Class Conexao 

{
protected $servidor = "";
protected $porta = ;
protected $dbname = "funcionarios";
protected $usuario = "postgres";
protected $senha = "";
protected $con = null;



function __construct(){} //método construtor

// Inicia Conexão

function open() {
    $this->con = @pg_connect("host=$this->servidor user=$this->usuario password=$this->senha dbname=$this->dbname"); 
    return $this->con;
}

function close() {
    @pg_close($this->con);
}

function statusCon() {
    if(!$this->con){
        echo "Erro ao se conectar.";
        exit;
    }
    else {
        echo "Conexão realizada com sucesso";
    }
}
}
?>