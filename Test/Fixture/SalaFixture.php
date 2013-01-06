<?php
/**
 * SalaFixture
 *
 */
class SalaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'predio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'capacidade' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'andar' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('numero', 'predio_id'), 'unique' => 1),
			'salas_FKIndex1' => array('column' => 'predio_id', 'unique' => 0),
			'salas_FKIndex2' => array('column' => 'numero', 'unique' => 0)
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
			'predio_id' => 1,
			'capacidade' => 1,
			'andar' => 1,
			'numero' => 1
		),
	);

}
