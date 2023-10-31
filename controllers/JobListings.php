<?php namespace RobertChumley\Jobforms\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class JobListings extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'jobs.view'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('newvertical.Jobforms', 'careers', 'joblisting');
    }

}
