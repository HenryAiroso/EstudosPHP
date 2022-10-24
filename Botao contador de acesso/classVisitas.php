<?php

include ("ClassConexao.php");


class ClassVisitas extends ClassConexao{

    private $ID, $IP,$Datas ,$Hora, $Limite ;

    public function __construct(){
        $this->ID=0;
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip=$_SERVER['HTTP_CLIENT_IP'];
          }
          elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
          }
          else{
            $ip=$_SERVER['REMOTE_ADDR'];
          }
        $this->IP=$ip;
        $this->Datas=date("Y/m/d");
        $this->Hora=date("H:i");
        $this->Limite=-2;
    }

    public function VerifyUser(){ 
        $Select=$this->Conexao()->prepare("SELECT * from visitas where IP=:IP and Datas=:Datas order by Id desc");
        $Select->bindParam(":IP",$this->IP,PDO::PARAM_STR);
        $Select->bindParam(":Datas",$this->Datas,PDO::PARAM_STR);   
        $Select->execute() ;
        
        if($Select->rowCount() == 0){
            $this->InsertVisitors();
        }else{
            $FSelect=$Select->fetch(PDO::FETCH_ASSOC);
            $HoraRegistroBanco=strtotime($FSelect['Hora']);
            $HoraAtual=strtotime($this->Hora);
            $DiminuirHoraParaConversao=$HoraAtual-$HoraRegistroBanco;
        
            if($DiminuirHoraParaConversao > $this->Limite){
                $this->InsertVisitors();
            }
        }
        

    }

    private function InsertVisitors()
    {
        $Select=$this->Conexao()->prepare("INSERT into visitas VALUES (:ID ,:IP,:Datas,:Hora)");
        
        $Select->bindParam(":ID",$this->ID,PDO::PARAM_STR);
        $Select->bindParam(":IP",$this->IP,PDO::PARAM_STR);
        $Select->bindParam(":Datas",$this->Datas,PDO::PARAM_STR);   
        $Select->bindParam(":Hora",$this->Hora,PDO::PARAM_STR);   
        $Select->execute();
    }

    

    
}

?>

