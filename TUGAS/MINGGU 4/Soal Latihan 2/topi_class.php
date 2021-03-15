<?php

//Autor Nurul Fatimah E31190445 golongan A

include_once("produk_class.php");
 
class Topi extends Produk {
     
    private $model;
     
    public function getModel() {
        return $this->model;
    }
 
    public function setModel($model) {
        $this->model = $model;
    }
     
}
?>