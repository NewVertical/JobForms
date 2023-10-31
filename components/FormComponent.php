<?php namespace nvt\JobForms\Components;

use Cms\Classes\ComponentBase;
use nvt\Jobforms\Models\JobListing;
use nvt\Jobforms\Models\Applications;
use nvt\Jobforms\Models\FormerEmployer;
use nvt\Jobforms\Models\Reference;
use nvt\Jobforms\Models\Settings;
use Redirect;
use Request;

/**
 * FormComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class FormComponent extends ComponentBase
{
    public function componentDetails():array
    {
        return [
            'name' => 'Form Component',
            'description' => 'Displays front-end job application forms with a backend for submissions'
        ];
    }

    public function onRun()
    {
        $this->page['job'] = JobListing::where('id', $this->param('joblisting_id'))->first();
        if ($this->page['job'] == null) {
            return Redirect::to("/404");
        }
        $this->page['formerEmployer'] = 1;
        $this->page['employerIndex'] = 0;
        $this->page['referenceIndex'] = 0;
        $this->settings = $this->page['settings'] = Settings::instance();
        $this->addCss("/plugins/nvt/jobforms/assets/css/default_form.css");
    }

    public function onAddEmployer() {
        $this->page['employerIndex'] = $_POST['ind'];
        return [
            '#formerEmployers' => $this->renderPartial('@former_employer.htm')
        ];
    }

    public function onAddReference() {
        $this->page['referenceIndex'] = $_POST['ind'];
        return [
          '#references' => $this->renderPartial('@references.htm')
        ];
    }

    public function onFormSubmission() {

        if(post('g-recaptcha-response') == null) return null;

        $application = new Applications(post("application"));
        $application->joblisting_id = $this->param('joblisting_id');
        $application->position = JobListing::where('id', $this->param('joblisting_id'))->first()->value('title');
        $application->save();

        foreach (post('former_employer') as $formerEmployerObj) {
            $formerEmployer = new FormerEmployer($formerEmployerObj);
            $formerEmployer->application_id = $application->id;
            $formerEmployer->save();
        }
        foreach (post('reference') as $referenceObj) {
            $reference = new Reference($referenceObj);
            $reference->application_id = $application->id;
            $reference->save();
        }
        return Redirect::to("/careers/submitted");
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties():array
    {
        return [];
    }
}
