<?php
App::uses('AppModel', 'Model');
/**
 * Turma Model
 *
 * @property Professor $Professor
 * @property Sala $Sala
 * @property Horario $Horario
 */
class Turma extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'disciplina_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'professor_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cod_turmas' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'deficiente' => array(
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
		'Professor' => array(
			'className' => 'Professor',
			'foreignKey' => 'professor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Sala' => array(
			'className' => 'Sala',
			'joinTable' => 'salas_turmas',
			'foreignKey' => 'turma_id',
			'associationForeignKey' => 'sala_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Horario' => array(
			'className' => 'Horario',
			'joinTable' => 'turmas_horarios',
			'foreignKey' => 'turma_id',
			'associationForeignKey' => 'horario_id',
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
