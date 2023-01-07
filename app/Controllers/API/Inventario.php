<?php

namespace App\Controllers\API;

use App\Models\InventarioModel;
use CodeIgniter\RESTful\ResourceController;

class Inventario extends ResourceController {

    public function __construct()
    {
        $this->model = $this->setModel(new InventarioModel ());
    }

    //METODO GET
    public function index()
    {
        $inventario = $this->model->findAll();
        return $this->respond($inventario);
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
