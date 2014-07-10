<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Thread extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'threads';

}
