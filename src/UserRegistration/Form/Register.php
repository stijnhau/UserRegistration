<?php
namespace UserRegistration\Form;

use ZfcUser\Form\Base;
use ZfcUser\Options\RegistrationOptionsInterface;
use UserRegistration\Options\ModuleOptions;

class Register extends Base
{
    /**
     * @var RegistrationOptionsInterface
     */
    protected $registrationOptions;
    /**
     * @var ModuleOptions
     */
    protected $moduleOptions;

    /**
     * @return the $moduleOptions
     */
    public function getModuleOptions()
    {
        return $this->moduleOptions;
    }

    /**
     * @param \UserRegistration\Options\ModuleOptions $moduleOptions
     *  @return Register
     */
    public function setModuleOptions($moduleOptions)
    {
        $this->moduleOptions = $moduleOptions;
        return $this;
    }

    /**
     * @param string|null                   $name
     * @param RegistrationOptionsInterface  $options
     * @param ModuleOptions                 $optionsMod
     */
    public function __construct($name, RegistrationOptionsInterface $options, ModuleOptions $optionsMod)
    {
        $this->setRegistrationOptions($options);
        $this->setModuleOptions($optionsMod);
        parent::__construct($name);

        $this->remove('id');

        $this->get('submit')->setLabel('Register');
        $this->getEventManager()->trigger('init', $this);
    }

    /**
     * Set Registration Options
     *
     * @param RegistrationOptionsInterface $registrationOptions
     * @return Register
     */
    public function setRegistrationOptions(RegistrationOptionsInterface $registrationOptions)
    {
        $this->registrationOptions = $registrationOptions;
        return $this;
    }

    /**
     * Get Registration Options
     *
     * @return RegistrationOptionsInterface
     */
    public function getRegistrationOptions()
    {
        return $this->registrationOptions;
    }
}
