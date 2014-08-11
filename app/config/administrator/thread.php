<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Threads',

	'single' => 'Threads',

	'model' => 'Thread',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Title',
		),
		'content' => array(
			'title' => 'Content',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'title',
		'content',
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'title' => array(
			'title' => 'Title',
			'type' => 'text',
			'limit' => 50,
		),
		'content' => array(
			'title' => 'Content',
			'type' => 'wysiwyg',
		),
	),
	
	'form_width' => 800,

);