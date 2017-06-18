<?php
namespace UserRegistration\Controller;

use UserRegistration\Options\ModuleOptions;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * RegisterController
 *
 * @author
 *
 * @version
 *
 */
class RegisterController extends AbstractActionController
{
    protected $options;
    protected $serviceLocator;

    public function setOptions(ModuleOptions $options)
    {
        $this->options = $options;
        return $this;
    }

    public function getOptions()
    {
        if (!$this->options instanceof ModuleOptions) {
            $this->setOptions($this->getServiceLocator()->get('userRegistration_module_options'));
        }
        return $this->options;
    }

    /**
     * @return the $serviceLocator
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * @param field_type $serviceLocator
     */
    public function setServiceLocator($serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        $sm = $this->getServiceLocator();

        $registerForm = $sm->get('zfcuser_register_form');

        // TODO Auto-generated RegisterController::indexAction() default action
        return array(
            'form' => $registerForm,
            'enableRegistration' =>  $sm->get('zfcuser_module_options')->getEnableRegistration(),
        );
    }
}
