<?php
namespace UserRegistration\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use UserRegistration\Options\ModuleOptions;

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