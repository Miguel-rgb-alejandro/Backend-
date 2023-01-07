<?php

namespace App\Controllers\API;

use App\Models\ClienteModel;
use CodeIgniter\RESTful\ResourceController;

class Cliente extends ResourceController {

    public function __construct()
    {
        $this->model = $this->setModel(new ClienteModel ());
    }

    //METODO GET
    public function index()
    {
        $cliente = $this->model->findAll();
        return $this->respond($cliente);
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
