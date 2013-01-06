<?php
App::uses('SalasTurma', 'Model');

/**
 * SalasTurma Test Case
 *
 */
class SalasTurmaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salas_turma',
		'app.predio',
		'app.favorito',
		'app.instituto',
		'app.departamento',
		'app.curso',
		'app.disciplina',
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
		$this->SalasTurma = ClassRegistry::init('SalasTurma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalasTurma);

		parent::tearDown();
	}

}
