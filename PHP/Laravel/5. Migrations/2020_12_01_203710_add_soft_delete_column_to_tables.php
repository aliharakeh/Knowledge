<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeleteColumnToTables extends Migration
{

    private $table_names = [
        'courses',
        'doctors',
        'departments',
        'categories',
        'roles',
        'questions',
        'evaluations',
        'logs',
        'messages',
        'comments'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->table_names as $table_name) {
            Schema::table($table_name, function (Blueprint $table) {
                $table->softDeletes();
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
        foreach ($this->table_names as $table_name) {
            Schema::table($table_name, function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
