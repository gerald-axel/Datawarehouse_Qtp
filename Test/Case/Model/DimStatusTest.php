<?php
App::uses('DimStatus', 'Model');

/**
 * DimStatus Test Case
 */
class DimStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimStatus = ClassRegistry::init('DimStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimStatus);

		parent::tearDown();
	}

}
