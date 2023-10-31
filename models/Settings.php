<?php namespace robertchumley\Jobforms\Models;

use Model;

/**
 * Settings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Settings extends Model
{
    public $implement = [\System\Behaviors\SettingsModel::class];

    public $settingsCode = 'nvt_captcha_settings';

    public $settingsFields = 'fields.yaml';
}
