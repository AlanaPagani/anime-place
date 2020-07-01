<?php

class comentario
{

    private $idComentario;
    private $idUsuario;
    private $idNoticia;
    private $NmConteudo;
    private $dtDate;

   public function getIdComentario($novoidComentario)
   {
        $this->$idComentario = $novoidComentario;
   }
   public function setidComentario()
   {
       return $this->idComentario;
   }
    
   public function getidUsuario($novoidUsuario)
   {
    $this->$idUsuario = $novoidUsuario;
   }
   public function setidUsuario()
   {
       return $this->idUsuario;
   }

   public function getidNoticia($novoidNoticia)
   {
    $this->$idNoticia = $novoidNoticia;
   }
   public function setidNoticia()
   {
       return $this->idNoticia;
   }

   public function getNmConteudo($novoNmConteudo)
   {
    $this->$NmConteudo = $novoNmConteudo;
   }
   public function setNmConteudo()
   {
       return $this->iNmConteudo;
   }

   public function getdtDate($novodtDate)
   {
    $this->$dtDate = $novodtDate;
   }
   public function setdtDate()
   {
       return $this->dtDate;
   }
}