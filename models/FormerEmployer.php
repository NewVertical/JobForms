<?php namespace robertchumley\Jobforms\Models;

use Model;

/**
 * Model
 */
class FormerEmployer extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'newvertical_jobforms_former_employer';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $fillable = [
        "former_employer_name",
        "former_employer_location",
        "salary",
        "position",
        "reason_for_leaving",
        "time_employed_start",
        "time_employed_end"
    ];

    public $belongsTo = [
        'application' => [Applications::class, 'table' => 'newvertical_jobforms_applications', 'key' => 'id']
    ];

}
