<?php
App::uses('Predio', 'Model');

/**
 * Predio Test Case
 *
 */
class PredioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.predio',
		'app.favorito',
		'app.instituto',
		'app.departamento',
		'app.curso',
		'app.disciplina',
		'app.salas_turma',
		'app.turma',
		'app.turmas_horario',
		'app.sala'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Predio = ClassRegistry::init('Predio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Predio);

		parent::tearDown();
	}

}
