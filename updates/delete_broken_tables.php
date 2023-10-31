<?php namespace nvt\Jobforms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * DeleteBrokenTables Migration
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
        Schema::table('newvertical_jobforms_delete_broken_tables', function(Blueprint $table) {
            Schema::dropIfExists('newvertical_jobforms_newvertical_jobforms_former_employer');
            Schema::dropIfExists('newvertical_jobforms_newvertical_jobforms_joblisting');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('newvertical_jobforms_delete_broken_tables', function(Blueprint $table) {
            // ...
        });
    }
};
