<?php
/**
 * HorarioFixture
 *
 */
class HorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'hora_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index'),
		'dia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'horarios_FKIndex1' => array('column' => 'dia_id', 'unique' => 0),
			'horarios_FKIndex2' => array('column' => 'hora_id', 'unique' => 0)
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
			'id' => 1,
			'hora_id' => 1,
			'dia_id' => 1
		),
	);

}
