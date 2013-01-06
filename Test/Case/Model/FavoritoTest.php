<?php
App::uses('Favorito', 'Model');

/**
 * Favorito Test Case
 *
 */
class FavoritoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.favorito',
		'app.instituto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Favorito = ClassRegistry::init('Favorito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Favorito);

		parent::tearDown();
	}

}
