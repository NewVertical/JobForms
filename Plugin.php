<?php namespace robertchumley\Jobforms;

use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
          'name' => 'JobForms',
          'description' => 'Provides end-to-end job listing and application submission capabilities',
          'author' => 'robertchumley',
            'icon' => 'icon-bar-chart-o'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents():array
    {
        return [
            \robertchumley\JobForms\Components\JobListingsComponent::class => 'JobListingsComponent',
            \robertchumley\JobForms\Components\FormComponent::class => 'FormComponent'
            ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Captcha Settings',
                'description' => 'Manage reCAPTCHA API keys and settings.',
                'icon' => 'icon-key',
                'class' => 'robertchumley\jobforms\Models\Settings',
                'keywords' => 'captcha reCAPTCHA google security form',
                'permissions' => ['nvt.webpageservices.access_settings'],
            ]
        ];
    }
}
