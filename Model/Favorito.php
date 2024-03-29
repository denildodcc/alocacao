<?php
App::uses('AppModel', 'Model');
/**
 * Favorito Model
 *
 * @property Instituto $Instituto
 */
class Favorito extends AppModel {

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
}
