<?php

class usuario 
{
    
    private $idUsuario;   
    private $nome;
    private $email;
    private $senha;
    
   public function getNome($novoNome)
   {
    $this->$nome = $novoNome;
   }
   public function setNome()
   {
       return $this->nome;
   }
   
   public function getEmail($novoEmail)
   {
    $this->$email = $novoEmail;
   }
   public function setEmail()
   {
       return $this->email;
   }

   public function getSenha($novoSenha)
   {
    $this->$nome = $novoSenha;
   }
   public function setSenha()
   {
       return $this->senha;
   }
}