<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumberOfViewToBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book', function($table) {
            $table->integer('number_of_view');
            $table->integer('sell_number');
            $table->integer(' quantity_in_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book', function($table) {
            $table->dropColumn('number_of_view');
            $table->dropColumn('sell_number');
            $table->dropColumn(' quantity_in_stock');
        });
    }
}
