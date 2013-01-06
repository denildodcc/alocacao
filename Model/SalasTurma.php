<?php
App::uses('AppModel', 'Model');
/**
 * SalasTurma Model
 *
 * @property Predio $Predio
 * @property Turma $Turma
 * @property Disciplina $Disciplina
 */
class SalasTurma extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'sala_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'predio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'turma_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'disciplina_id' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Predio' => array(
			'className' => 'Predio',
			'foreignKey' => 'predio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'disciplina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
