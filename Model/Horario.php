<?php
App::uses('AppModel', 'Model');
/**
 * Horario Model
 *
 * @property Hora $Hora
 * @property Dia $Dia
 * @property Turma $Turma
 */
class Horario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hora_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dia_id' => array(
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
		'Hora' => array(
			'className' => 'Hora',
			'foreignKey' => 'hora_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dia' => array(
			'className' => 'Dia',
			'foreignKey' => 'dia_id',
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
		'Turma' => array(
			'className' => 'Turma',
			'joinTable' => 'turmas_horarios',
			'foreignKey' => 'horario_id',
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
