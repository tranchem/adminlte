<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('sanpham')) {
     // create the tblCategory table
            Schema::create('sanpham', function($table) {
                $table->increments('id');
                $table->string('ten', 200);
                $table->string('gia', 200);
                $table->string('thumbnail', 200);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
