<?php
App::uses('DimTime', 'Model');

/**
 * DimTime Test Case
 */
class DimTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimTime = ClassRegistry::init('DimTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimTime);

		parent::tearDown();
	}

}
