<?php
App::uses('Turma', 'Model');

/**
 * Turma Test Case
 *
 */
class TurmaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.turma',
		'app.professor',
		'app.sala',
		'app.salas_turma',
		'app.horario',
		'app.hora',
		'app.dia',
		'app.turmas_horario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Turma = ClassRegistry::init('Turma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Turma);

		parent::tearDown();
	}

}
