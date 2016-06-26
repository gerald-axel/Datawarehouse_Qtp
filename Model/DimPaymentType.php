<?php
App::uses('AppModel', 'Model');
/**
 * DimPaymentType Model
 *
 */
class DimPaymentType extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'dim_payment_type';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Type' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
