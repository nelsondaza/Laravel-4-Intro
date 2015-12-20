<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	if( false ) {
		\Illuminate\Support\Facades\Schema::create('books',function( $newTable ){
			/**
			 * @var  $newTable \Illuminate\Database\Schema\Blueprint
			 */

			$newTable->increments('id');
			$newTable->string('writer');
			$newTable->string('title',500);
			$newTable->text('description');
			$newTable->date('published');
			$newTable->integer('copies');
			$newTable->timestamps();

		});
	}

	\Illuminate\Support\Facades\Schema::table('books',function( $table ){
		/**
		 * @var  $table \Illuminate\Database\Schema\Blueprint
		 */
		$table->boolean('in_store');
		$table->dropColumn('copies');

	});


	return View::make('hello');
});
