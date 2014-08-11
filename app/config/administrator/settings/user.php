<?php

/**
 * The main site settings page
 */

return array(

	/**
	 * Settings page title
	 *
	 * @type string
	 */
	'title' => 'Users',

	/**
	 * The edit fields array
	 *
	 * @type array
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

	/**
	 * The validation rules for the form, based on the Laravel validation class
	 *
	 * @type array
	 */
	'rules' => array(
		'username' => 'required',
		'email' => 'required',
	),

	/**
	 * This is run prior to saving the JSON form data
	 *
	 * @type function
	 * @param array		$data
	 *
	 * @return string (on error) / void (otherwise)
	 */
	'before_save' => function(&$data)
	{
		// $data['site_name'] = $data['site_name'] . ' - The Blurst Site Ever';
	},

	/**
	 * The permission option is an authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view this settings page. Any "falsey" response will result in a 404.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return true;
		//return Auth::user()->hasRole('developer');
	},

	/**
	 * This is where you can define the settings page's custom actions
	 */
	'actions' => array(
		
	),
);