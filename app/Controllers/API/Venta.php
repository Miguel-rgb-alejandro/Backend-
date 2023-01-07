<?php

namespace App\Controllers\API;

use App\Models\VentaModel;
use CodeIgniter\RESTful\ResourceController;

class Venta extends ResourceController {

    public function __construct()
    {
        $this->model = $this->setModel(new VentaModel ());
    }

    //METODO GET
    public function index()
    {
        $venta = $this->model->findAll();
        return $this->respond($venta);
    }

    public function respuesta ($data, $mensaje, $codigo){
        if ($codigo == 200){
            return $this->respond(array(
                "status" => $codigo,
                "data" => $data
            ));
        }else{
            return $this->respond(array(
                "status" => $codigo,
                "mensaje" => $mensaje
            ));
        }
    }

}
