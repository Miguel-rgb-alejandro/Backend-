<?php namespace App\Models;

use Codeigniter\Model;

class VendedorModel extends Model{

    protected $table = 'vendedor';
    protected $primarykey = 'id';
    protected $returnType = 'stock';
    protected $allowedFields = ['stock'];

 //Validacion de cada seccion de la tabla de vendedor
    protected $validationRules = [
        'stock' => 'required|alpha_space|min_length[3]|max_length[20]',
    ];

// Validacion de la secciones
    protected $validationMessages = [
        'stock' => [
            'valid_stock' => 'Ingrese una cantidad'
        ]
    ];

// Validacion para no saltar el paso anterior
    protected $skipValidation = false;
}