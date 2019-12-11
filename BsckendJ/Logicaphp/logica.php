<?php

class logica {

    private $bd;

    public function __construct() {
        $this->bd = new BD();
    }

    
    //PRODUCTOS

    public function insertar_productos($nombre,$descripcion,$imagen){
       
        $reg = $this->bd->insert("INSERT INTO productos (Nombre,Descripcion,Imagen) values (?,?,?)","sss",$nombre,$descripcion,$imagen);
       }
       
    //SLIDER
       public function insertar_slider($titulo,$texto,$imagen){
       
        $reg = $this->bd->insert("INSERT INTO slider (Titulo,Texto,Imagen) values (?,?,?)","sss",$titulo,$texto,$imagen);
       }
       

}
  





