<?php namespace RobertChumley\Jobforms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateNewverticalJobformsFormerEmployer Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::dropIfExists('newvertical_jobforms_former_employer');
        Schema::create('newvertical_jobforms_former_employer', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('application_id');
            $table->foreign('application_id')
                ->references('id')
                ->on('newvertical_jobforms_applications')
                ->onDelete('cascade');
            $table->string('former_employer_name')->nullable();
            $table->string('former_employer_location')->nullable();
            $table->string('salary')->nullable();
            $table->string('position')->nullable();
            $table->text('reason_for_leaving')->nullable();
            $table->string('time_employed_start')->nullable();
            $table->string('time_employed_end')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('newvertical_jobforms_former_employer');
    }
};
