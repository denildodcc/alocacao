<?php
App::uses('AppModel', 'Model');
/**
 * Dia Model
 *
 * @property Horario $Horario
 */
class Dia extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Horario' => array(
			'className' => 'Horario',
			'foreignKey' => 'dia_id',
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
