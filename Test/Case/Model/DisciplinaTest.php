<?php
App::uses('Disciplina', 'Model');

/**
 * Disciplina Test Case
 *
 */
class DisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disciplina',
		'app.curso',
		'app.departamento',
		'app.instituto',
		'app.salas_turma',
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
		$this->Disciplina = ClassRegistry::init('Disciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Disciplina);

		parent::tearDown();
	}

}
