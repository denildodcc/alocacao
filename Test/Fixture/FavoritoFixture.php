<?php
/**
 * FavoritoFixture
 *
 */
class FavoritoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'predio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'instituto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'primary'),
		'ordem' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => array('predio_id', 'instituto_id'), 'unique' => 1),
			'predios_institutos_FKIndex1' => array('column' => 'predio_id', 'unique' => 0),
			'predios_institutos_FKIndex2' => array('column' => 'instituto_id', 'unique' => 0)
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
			'instituto_id' => 1,
			'ordem' => 1
		),
	);

}
