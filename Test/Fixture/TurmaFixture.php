<?php
/**
 * TurmaFixture
 *
 */
class TurmaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'professor_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'cod_turmas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'deficiente' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('disciplina_id', 'cod_turmas'), 'unique' => 1),
			'turmas_FKIndex1' => array('column' => 'disciplina_id', 'unique' => 0),
			'turmas_FKIndex2' => array('column' => 'professor_id', 'unique' => 0),
			'turmas_FKIndex3' => array('column' => 'cod_turmas', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'professor_id' => 'Lorem ipsum dolor ',
			'disciplina_id' => 1,
			'cod_turmas' => 1,
			'deficiente' => 1
		),
	);

}
