<?php

namespace App\Controllers\API;

use App\Models\SnackModel;
use CodeIgniter\RESTful\ResourceController;

class Snack extends ResourceController {

    public function __construct()
    {
        $this->model = $this->setModel(new SnackModel ());
    }

    //METODO GET
    public function index()
    {
        $snack = $this->model->findAll();
        return $this->respond($snack);
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
