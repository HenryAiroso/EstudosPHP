<?php

class classConexao{
    
    public function Conexao(){
        try{
            $Con=new PDO("mysql:host=localhost;dbname=recepcao","root","");
            return $Con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}