<?php
/**
 * DimTime Fixture
 */
class DimTimeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dim_time';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'StartDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'StartYear' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'StartQuarter' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'StartMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'StartWeek' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'EndDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'EndYear' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'EndQuarter' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'EndMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EndWeek' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'Id' => 1,
			'StartDate' => '2016-05-31',
			'StartYear' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'StartQuarter' => 1,
			'StartMonth' => 'Lorem ipsum dolor sit amet',
			'StartWeek' => 1,
			'EndDate' => '2016-05-31',
			'EndYear' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'EndQuarter' => 1,
			'EndMonth' => 'Lorem ipsum dolor sit amet',
			'EndWeek' => 1
		),
	);

}
