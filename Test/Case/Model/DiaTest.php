<?php
App::uses('Dia', 'Model');

/**
 * Dia Test Case
 *
 */
class DiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dia',
		'app.horario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dia = ClassRegistry::init('Dia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dia);

		parent::tearDown();
	}

}
