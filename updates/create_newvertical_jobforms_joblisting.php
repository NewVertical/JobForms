<?php namespace robertchumley\Jobforms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateNewverticalJobformsJoblisting Migration
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
        Schema::create('newvertical_jobforms_joblisting', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('requirements')->nullable();
            $table->string('short_description')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('newvertical_jobforms_joblisting');
    }
};
