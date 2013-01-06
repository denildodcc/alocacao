<?php
/**
 * TurmasHorarioFixture
 *
 */
class TurmasHorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'horario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'turma_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('horario_id', 'turma_id', 'disciplina_id'), 'unique' => 1),
			'turmas_horarios_FKIndex2' => array('column' => 'horario_id', 'unique' => 0),
			'turmas_horarios_FKIndex3' => array('column' => 'turma_id', 'unique' => 0),
			'turmas_horarios_FKIndex4' => array('column' => 'disciplina_id', 'unique' => 0)
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
			'horario_id' => 1,
			'turma_id' => 1,
			'disciplina_id' => 1
		),
	);

}
