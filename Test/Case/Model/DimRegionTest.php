<?php
App::uses('DimRegion', 'Model');

/**
 * DimRegion Test Case
 */
class DimRegionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_region'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimRegion = ClassRegistry::init('DimRegion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimRegion);

		parent::tearDown();
	}

}
