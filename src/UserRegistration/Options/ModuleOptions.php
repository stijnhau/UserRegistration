<?php
namespace UserRegistration\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * Turn off strict options mode
     */
    protected $__strictMode__ = false;

    /**
     * If we send an activation mail and only activated users are allowed to sign in.
     * @var boolean
     */
    protected $enableActivation = true;

    /**
     * Wat is the default registration field.
     */
    protected $registrationField = 'username';

    /**
     * Do we want the user to input the gender.
     */
    protected $displayGender = true;
}
