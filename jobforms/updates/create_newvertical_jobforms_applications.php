<?php namespace nvt\Jobforms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateNewverticalJobformsApplications Migration
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
        Schema::dropIfExists('newvertical_jobforms_applications');
        Schema::create('newvertical_jobforms_applications', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('joblisting_id');
            $table->foreign('joblisting_id')
                ->references('id')
                ->on('newvertical_jobforms_joblisting')
                ->onDelete('cascade');
            $table->timestamps();
            $table->string('position');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address_1');
            $table->string('street_address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone_number');
            $table->string('phone_number_2')->nullable();
            $table->string('email');
            $table->date('start_date');
            $table->string('desired_salary')->nullable();
            $table->string('currently_employed');
            $table->string('contact_employer')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_number')->nullable();
            $table->string('employer_email')->nullable();
            $table->string('previously_applied');
            $table->string('applied_when')->nullable();
            $table->string('high_school_name');
            $table->string('high_school_address');
            $table->string('high_school_city');
            $table->string('high_school_state');
            $table->string('high_school_zip');
            $table->string('high_school_years_attended');
            $table->string('graduated_high_school');
            $table->string('attended_college');
            $table->string('college_name')->nullable();
            $table->string('college_major')->nullable();
            $table->string('degree_earned')->nullable();
            $table->string('college_address')->nullable();
            $table->string('college_city')->nullable();
            $table->string('college_state')->nullable();
            $table->string('college_zip')->nullable();
            $table->string('college_years_attended')->nullable();
            $table->string('graduated_college')->nullable();
            $table->string('attended_trade_school');
            $table->string('trade_school_name')->nullable();
            $table->string('trade_school_address')->nullable();
            $table->text('trade_school_subjects')->nullable();
            $table->string('trade_school_city')->nullable();
            $table->string('trade_school_state')->nullable();
            $table->string('trade_school_zip')->nullable();
            $table->string('trade_school_years_attended')->nullable();
            $table->string('graduated_trade_school')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('newvertical_jobforms_applications');
    }
};
