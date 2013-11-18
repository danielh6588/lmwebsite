<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property holidays $holidays
 */
class Category extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'category';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cname';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'desc' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'holidays' => array(
			'className' => 'holidays',
			'foreignKey' => 'cat_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
