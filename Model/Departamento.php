<?php
App::uses('AppModel', 'Model');
/**
 * Departamento Model
 *
 * @property Instituto $Instituto
 * @property Curso $Curso
 */
class Departamento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'instituto_id' => array(
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
		'Instituto' => array(
			'className' => 'Instituto',
			'foreignKey' => 'instituto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'departamento_id',
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
