<?php
App::uses('Hora', 'Model');

/**
 * Hora Test Case
 *
 */
class HoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hora',
		'app.horario',
		'app.dia',
		'app.turma',
		'app.turmas_horario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hora = ClassRegistry::init('Hora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hora);

		parent::tearDown();
	}

}
