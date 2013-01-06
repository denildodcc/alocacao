<?php
App::uses('Sala', 'Model');

/**
 * Sala Test Case
 *
 */
class SalaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sala',
		'app.turma',
		'app.salas_turma'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sala = ClassRegistry::init('Sala');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sala);

		parent::tearDown();
	}

}
