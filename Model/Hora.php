<?php
App::uses('AppModel', 'Model');
/**
 * Hora Model
 *
 * @property Horario $Horario
 */
class Hora extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Horario' => array(
			'className' => 'Horario',
			'foreignKey' => 'hora_id',
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
