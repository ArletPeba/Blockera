<?php

class logica {

    public $bd;

    public function __construct() {
        $this->bd = new BD();
    }

    //PRODUCTOS


    public function mostrar_todos() {
        $reg = $this->bd->select("select* from productos limit ?", "i", 10);
        $acu = "";
        $route = "/BsckendJ/";
        foreach ($reg as $r) {
            $detalle = $r['Id_Productos'];
            $acu .= '
              
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                        <img src="' . $route . '' . $r['Imagen'] . '" style="max-height=240px"> 
                            <div class="gallery_hover">
                                <h4>' . $r['Nombre'] . '</h4>
                                <a href="" class="button_all" data-toggle="modal" data-target="#modalRelatedContent">View</a>
                            </div>
                     </div>

      <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">Related article</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
 
      <div class="modal-body">

        <div class="row">
          <div class="col-5">
           
        
           <img src="' . $route . '' . $r['Imagen'] . '" style="max-height=240px">
               <h2>'.$detalle.'</h2>
          </div>

          <div class="col-7">
            <p><strong>My travel to paradise</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit [...]</p>
            <button type="button" class="btn btn-info btn-md">Read more</button>

          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalRelatedContent-->
';
            /* @var $detalle type */
        }

        return $acu;
    }

    public function mostrar_slider() {
        $reg = $this->bd->select("select* from slider limit ?", "i", 10);
        $acu = "";
        $route = "/BsckendJ/";
        foreach ($reg as $r) {
            $acu .= ' <div data-thumb="" data-src="' . $route . '' . $r['Imagen'] . '">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">' . $r['Texto'] . '</h5>
                        
                   </div>
                </div>
            </div>';
        }
        return $acu;
    }

    public function mostrar_productos_postes() {
        $reg = $this->bd->select("select NOMBRE,PRECIO,DESCRIPCION,IMAGEN from productos where TIPO='Arboles' limit ?", "i", 1000);
        $acu = "";

        foreach ($reg as $r) {
            $acu .= '<div class="col-md-4">
                        <div class="thumbnail">
                            <img class="fotu" src="' . $r['IMAGEN'] . '" alt="macetas">
                            <div class="caption">
                                <h3 class="es" >' . $r['NOMBRE'] . '</h3>
                                <p class="parr" >$' . $r['PRECIO'] . '.00</p>
                                <p class="parr">Descripción del producto:</p>
                                <p>' . $r['DESCRIPCION'] . '</p>
                            </div>
                        </div>
                    </div>';
        }
        return $acu;
    }

    public function mostrar_detalle_producto($id) {
        $reg = $this->bd->select("select* from productos where Id_Productos=? limit 1", "i", $id);
    }

}
