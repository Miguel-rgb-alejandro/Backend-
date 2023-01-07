<?php

namespace App\Controllers\API;

use App\Models\VendedorModel;
use CodeIgniter\RESTful\ResourceController;

class Vendedor extends ResourceController {

    public function __construct()
    {
        $this->model = $this->setModel(new VendedorModel ());
    }

    //METODO GET
    public function index()
    {
        $vendedor = $this->model->findAll();
        return $this->respond($vendedor);
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
