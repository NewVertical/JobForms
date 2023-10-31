<?php namespace nvt\Jobforms\Models;

use Model;

/**
 * Model
 */
class Applications extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'newvertical_jobforms_applications';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $fillable = [
        "joblisting_id",
        "created_at",
        "updated_at",
        "start_date",
        "id",
        "street_address_2",
        "city",
        "state",
        "zip_code",
        "phone_number",
        "phone_number_2",
        "email",
        "desired_salary",
        "currently_employed",
        "contact_employer",
        "employer_name",
        "employer_number",
        "employer_email",
        "previously_applied",
        "applied_when",
        "high_school_name",
        "high_school_address",
        "high_school_city",
        "high_school_state",
        "high_school_zip",
        "high_school_years_attended",
        "graduated_high_school",
        "attended_college",
        "college_name",
        "college_major",
        "degree_earned",
        "college_address",
        "college_city",
        "college_state",
        "college_zip",
        "college_years_attended",
        "graduated_college",
        "attended_trade_school",
        "trade_school_name",
        "trade_school_address",
        "trade_school_subjects",
        "trade_school_city",
        "trade_school_state",
        "trade_school_zip",
        "trade_school_years_attended",
        "graduated_trade_school",
        "first_name",
        "last_name",
        "street_address_1"
    ];

    public $belongsTo = [
        'joblisting' => [JobListing::class, 'table' => 'newvertical_jobforms_joblisting', 'key' => 'id']
    ];

    public $hasMany = [
        'former_employers' => [FormerEmployer::class, 'table' => 'newvertical_jobforms_former_employer', 'key' => 'application_id'],
        'references' => [Reference::class, 'table' => 'newvertical_jobforms_references', 'key' => 'application_id']
    ];

}
