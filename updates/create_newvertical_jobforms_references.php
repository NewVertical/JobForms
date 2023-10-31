<?php namespace robertchumley\Jobforms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateNewverticalJobformsReferences Migration
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
        Schema::create('newvertical_jobforms_references', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('application_id');
            $table->foreign('application_id')
                ->references('id')
                ->on('newvertical_jobforms_applications')
                ->onDelete('cascade');
            $table->string('reference_name');
            $table->string('reference_street_address')->nullable();
            $table->string('reference_city')->nullable();
            $table->string('reference_state')->nullable();
            $table->string('reference_zip')->nullable();
            $table->string('business_name')->nullable();
            $table->string('reference_phone_number');
            $table->string('reference_years_known');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('newvertical_jobforms_references');
    }
};
