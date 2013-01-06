<?php
App::uses('Horario', 'Model');

/**
 * Horario Test Case
 *
 */
class HorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.horario',
		'app.hora',
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
		$this->Horario = ClassRegistry::init('Horario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horario);

		parent::tearDown();
	}

}
