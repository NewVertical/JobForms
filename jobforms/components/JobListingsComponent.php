<?php namespace nvt\Jobforms\Components;

use Cms\Classes\ComponentBase;
use nvt\JobForms\Models\JobListing;

/**
 * JobListings Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class JobListingsComponent extends ComponentBase
{

    public function onRun() {
        $this->page['jobs'] = JobListing::all();
    }
    public function componentDetails():array
    {
        return [
            'name' => 'JobListings Component',
            'description' => 'Displays a list of jobs'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties():array
    {
        return [];
    }
}
