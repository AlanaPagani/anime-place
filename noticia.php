<?php

class noticia 
{
    
    private $id;
    private $nmTitulo;
    private $nmConteudo;
    private $idUsuario;
   
   public function getIdUsuario($novoIdUsuario)
   {
    $this->$IdUsuario = $novoIdUsuario;
   }
   public function setIdUsuario()
   {
       return $this->IdUsuario;
   }
    
   public function getnmTitulo($novonmTitulo)
   {
    $this->$nmTitulo = $novonmTitulo;
   }
   public function setnmTitulo()
   {
       return $this->nmTitulo;
   }

   public function getnmConteudo($novonmConteudo)
   {
    $this->$nmConteudo = $novonmConteudo;
   }
   public function setnmConteudo()
   {
       return $this->nmConteudo;
   }

   public function getid($novoid)
   {
    $this->$id = $novoid;
   }
   public function setid()
   {
       return $this->id;
   }
}