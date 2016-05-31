<?php
App::uses('DimAssistant', 'Model');

/**
 * DimAssistant Test Case
 */
class DimAssistantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_assistant',
		'app.try'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimAssistant = ClassRegistry::init('DimAssistant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimAssistant);

		parent::tearDown();
	}

}
