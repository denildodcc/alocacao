<?php
/**
 * SalasTurmaFixture
 *
 */
class SalasTurmaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'sala_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'predio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'turma_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('sala_id', 'disciplina_id', 'turma_id', 'predio_id'), 'unique' => 1),
			'salas_turmas_FKIndex1' => array('column' => 'sala_id', 'unique' => 0),
			'salas_turmas_FKIndex2' => array('column' => 'disciplina_id', 'unique' => 0),
			'salas_turmas_FKIndex3' => array('column' => 'turma_id', 'unique' => 0),
			'salas_turmas_FKIndex4' => array('column' => 'predio_id', 'unique' => 0)
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
			'sala_id' => 1,
			'predio_id' => 1,
			'turma_id' => 1,
			'disciplina_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet'
		),
	);

}
