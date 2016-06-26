<?php
App::uses('DimPaymentType', 'Model');

/**
 * DimPaymentType Test Case
 */
class DimPaymentTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_payment_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimPaymentType = ClassRegistry::init('DimPaymentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimPaymentType);

		parent::tearDown();
	}

}
