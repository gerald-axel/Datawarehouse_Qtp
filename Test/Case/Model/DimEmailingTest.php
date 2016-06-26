<?php
App::uses('DimEmailing', 'Model');

/**
 * DimEmailing Test Case
 */
class DimEmailingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_emailing'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimEmailing = ClassRegistry::init('DimEmailing');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimEmailing);

		parent::tearDown();
	}

}
