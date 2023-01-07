<?php namespace App\Models;

use Codeigniter\Model;

class ClienteModel extends Model{

    protected $table = 'cliente';
    protected $primarykey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre',
                                'apellido'];

 //Validacion de cada seccion de la tabla de cliente
    protected $validationRules = [
        'nombre' => 'required|alpha_space|min_length[3]|max_length[20]',
        'apellido' => 'required|alpha_space|min_length[3]|max_length[20]',

    ];

// Validacion de la secciones
    protected $validationMessages = [
        'nombre' => [
            'valid_nombre' => 'Ingrese un nombre'
        ]  
    ];

// Validacion para no saltar el paso anterior
    protected $skipValidation = false;
}