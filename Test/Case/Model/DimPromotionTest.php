<?php
App::uses('DimPromotion', 'Model');

/**
 * DimPromotion Test Case
 */
class DimPromotionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_promotion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimPromotion = ClassRegistry::init('DimPromotion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimPromotion);

		parent::tearDown();
	}

}
