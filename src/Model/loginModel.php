<?php

Almacen::uses('loginModel', 'Model');
class Login extends loginModel {
	public $useDbConfig = 'alternate';
	public $useTable = 'login';
	public $displayField = 'username';

	protected $_schema = array(
    'id_empleado' => array(
        'type' => 'integer',
        'length' => 4
    ),
    'usuario' => array(
        'type' => 'string',
        'length' => 20
    ),
    'contraseña' => array(
        'type' => 'VARCHAR',
        'length' => 20
    ),
);

}