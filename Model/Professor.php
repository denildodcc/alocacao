<?php
App::uses('AppModel', 'Model');
/**
 * Professor Model
 *
 * @property Turma $Turma
 */
class Professor extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'professor_id',
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
