<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Users',

	'single' => 'Users',

	'model' => 'User',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'username' => array(
			'title' => 'Username',
		),
		'email' => array(
			'title' => 'Email',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'username',
		'email',
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'username' => array(
			'title' => 'Username',
			'type' => 'text',
		),
		'email' => array(
			'title' => 'Email',
			'type' => 'text',
		),
	),

);