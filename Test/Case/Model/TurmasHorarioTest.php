<?php
App::uses('TurmasHorario', 'Model');

/**
 * TurmasHorario Test Case
 *
 */
class TurmasHorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.turmas_horario',
		'app.turma',
		'app.professor',
		'app.sala',
		'app.salas_turma',
		'app.horario',
		'app.hora',
		'app.dia',
		'app.disciplina',
		'app.curso',
		'app.departamento',
		'app.instituto',
		'app.favorito'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TurmasHorario = ClassRegistry::init('TurmasHorario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TurmasHorario);

		parent::tearDown();
	}

}
