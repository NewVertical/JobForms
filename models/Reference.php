<?php namespace RobertChumley\Jobforms\Models;

use Model;

/**
 * Reference Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Reference extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $timestamps = false;
    /**
     * @var string table name
     */
    public $table = 'newvertical_jobforms_references';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
      "reference_name",
      "business_name",
      "reference_street_address",
      "reference_city",
      "reference_state",
      "reference_zip",
      "reference_phone_number",
      "reference_years_known"
    ];

    public $belongsTo = [
        'application' => [Applications::class, 'table' => 'newvertical_jobforms_applications', 'key' => 'id']
    ];
}
