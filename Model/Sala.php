<?php
App::uses('AppModel', 'Model');
/**
 * Sala Model
 *
 * @property Turma $Turma
 */
class Sala extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'predio_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numero' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'joinTable' => 'salas_turmas',
			'foreignKey' => 'sala_id',
			'associationForeignKey' => 'turma_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
