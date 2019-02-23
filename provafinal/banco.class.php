<?php

Class Banco {

    private $host = 'localhost';
    private $banco = 'provafinal';
    private $user = 'root';
    private $senha ='';
  



 public function conexao(){

    $coneexao = mysqli_connect($this->host,$this->user,$this->senha,$this->banco);
     mysqli_set_charset($coneexao,'utf8');

   if (mysqli_connect_errno()) {
       echo ' deu todo erado';
   }else{
     

   }
 
    return $coneexao;
 }

}


















?>