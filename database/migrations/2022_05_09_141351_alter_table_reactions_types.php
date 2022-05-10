<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableReactionsTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reaction_types', function (Blueprint $table) {

            $table->string('description', 25)->change();
            //composer require doctrine/dbal
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reaction_types', function (Blueprint $table) {
            $table->string('description', 100)->change();
        });
    }
}
