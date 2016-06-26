<?php
App::uses('DimCategoriesCourse', 'Model');

/**
 * DimCategoriesCourse Test Case
 */
class DimCategoriesCourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dim_categories_course'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DimCategoriesCourse = ClassRegistry::init('DimCategoriesCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DimCategoriesCourse);

		parent::tearDown();
	}

}
