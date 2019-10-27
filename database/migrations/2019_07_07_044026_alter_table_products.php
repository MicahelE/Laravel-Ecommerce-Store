<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function($table) {
            $table->string('name')->after('id');
            $table->string('description')->after('name');
            $table->string('size')->after('description');
            $table->string('image')->after('size');
            $table->integer('category_id')->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('products', function($table) {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('size');
            $table->dropColumn('image');
            $table->dropColumn('category_id');
        });
    }
}
