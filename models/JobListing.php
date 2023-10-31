<?php namespace nvt\Jobforms\Models;

use Model;

/**
 * Model
 */
class JobListing extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'newvertical_jobforms_joblisting';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $hasMany = [
        'applications' => [Applications::class, 'table' => 'newvertical_jobforms_applications', 'key' => 'joblisting_id']
    ];

}
