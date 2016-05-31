<?php
App::uses('Fact', 'Model');

/**
 * Fact Test Case
 */
class FactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fact = ClassRegistry::init('Fact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fact);

		parent::tearDown();
	}

}
