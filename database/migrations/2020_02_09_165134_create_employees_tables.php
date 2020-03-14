<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTables extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('employee_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'employee');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('employee_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'employee');
        });

        Schema::create('employee_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'employee');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_revisions');
        Schema::dropIfExists('employee_translations');
        Schema::dropIfExists('employee_slugs');
        Schema::dropIfExists('employees');
    }
}
