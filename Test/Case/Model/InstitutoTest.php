<?php
App::uses('Instituto', 'Model');

/**
 * Instituto Test Case
 *
 */
class InstitutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instituto',
		'app.departamento',
		'app.curso',
		'app.disciplina',
		'app.salas_turma',
		'app.turma',
		'app.turmas_horario',
		'app.favorito'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Instituto = ClassRegistry::init('Instituto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instituto);

		parent::tearDown();
	}

}
