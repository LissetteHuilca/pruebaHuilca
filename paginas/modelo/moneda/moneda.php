<?php

class moneda
{
    private $idmoneda;
    private $nombre;
    private $idciudadfk;
    
    
     function __construct($idmoneda, $nombre, $idciudadfk) {
       $this->idmoneda = $idmoneda;
       $this->nombre = $nombre;
       $this->idciudadfk = $idciudadfk;
     }
    
     function setIdmoneda($idmoneda){
       $this->idmoneda = $idmoneda;
     } 
     function getIdmoneda(){
       return $this->idmoneda;
     } 
       function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setIdciudadfk($idciudadfk){
       $this->idciudadfk = $idciudadfk;
     } 
     function getIdciudadfk(){
       return $this->idciudadfk;
     
}
}

?> 