<?php namespace App\Models;

use Codeigniter\Model;

class VentaModel extends Model{

    protected $table = 'vendedor';
    protected $primarykey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['numeroventa',
                                'fecha',
                                'total'];

 //Validacion de cada seccion de la tabla de vendedor
    protected $validationRules = [
        'numeroventa' => 'required|alpha_space|min_length[3]|max_length[20]',
        'fecha' => 'required|alpha_space|min_length[3]|max_length[20]',
        'total' => 'permit_empty|alpha_space|max_length[255]',
    ];

// Validacion de la secciones
    protected $validationMessages = [
        'numeroventa' => [
            'valid_numeroventa' => 'Ingrese el numero de venta'
        ]
    ];

// Validacion para no saltar el paso anterior
    protected $skipValidation = false;
}