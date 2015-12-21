<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		\Illuminate\Support\Facades\Schema::drop('books');
	}

}
