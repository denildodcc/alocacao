<?php
App::uses('AppModel', 'Model');
/**
 * Predio Model
 *
 * @property Favorito $Favorito
 * @property Sala $Sala
 * @property SalasTurma $SalasTurma
 */
class Predio extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Favorito' => array(
			'className' => 'Favorito',
			'foreignKey' => 'predio_id',
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
		'Sala' => array(
			'className' => 'Sala',
			'foreignKey' => 'predio_id',
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
		'SalasTurma' => array(
			'className' => 'SalasTurma',
			'foreignKey' => 'predio_id',
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
