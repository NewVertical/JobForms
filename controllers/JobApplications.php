<?php namespace RobertChumley\Jobforms\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class JobApplications extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('newvertical.Jobforms', 'careers', 'submissions');
    }

}
