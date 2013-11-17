<?php
App::uses('AppModel', 'Model');
/**
 * AdminMenu Model
 *
 */
class AdminMenu extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'admin_menu';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
