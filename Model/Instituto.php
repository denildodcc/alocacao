<?php
App::uses('AppModel', 'Model');
/**
 * Instituto Model
 *
 * @property Departamento $Departamento
 * @property Favorito $Favorito
 */
class Instituto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'instituto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Favorito' => array(
			'className' => 'Favorito',
			'foreignKey' => 'instituto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
