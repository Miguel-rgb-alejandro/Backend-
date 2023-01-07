<?php namespace App\Models;

use Codeigniter\Model;

class SnackModel extends Model{

    protected $table = 'Snack';
    protected $primarykey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre',
                                'marca',
                                'precio'];

 //Validacion de cada seccion de la tabla de vendedor
    protected $validationRules = [
        'nombre' => 'required|alpha_space|min_length[3]|max_length[20]',
        'marca' => 'required|alpha_space|min_length[3]|max_length[20]',
        'precio' => 'permit_empty|alpha_space|max_length[255]',
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