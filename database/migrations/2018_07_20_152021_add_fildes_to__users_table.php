<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFildesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users',function($table)
      {

$table->string('first_name');
$table->string('last_name');
$table->string('location');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


 Schema::table('users',function($table)
      {

$table->dropColumn('first_name');
$table->dropColumn('last_name');
$table->dropColumn('location');

      });


       // Schema::
    }
}
