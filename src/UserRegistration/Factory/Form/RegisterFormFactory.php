<?php
namespace UserRegistration\Factory\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use UserRegistration\Form\Register;
use ZfcUser\Form\RegisterFilter;
use ZfcUser\Validator\NoRecordExists;
use ZfcUser\Options;

class RegisterFormFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        /* @var $options Options\ModuleOptions */
        $options = $serviceManager->get('zfcuser_module_options');

        /* @var $optionsMod Options\ModuleOptions */
        $optionsMod = $serviceManager->get('userRegistration_module_options');

        $userMapper = $serviceManager->get('zfcuser_user_mapper');

        $emailValidator = new NoRecordExists(array(
            'mapper' => $userMapper,
            'key' => 'email',
        ));

        $userNameValidator = new NoRecordExists(array(
            'mapper' => $userMapper,
            'key' => 'username',
        ));

        $inputFilter = new RegisterFilter(
            $emailValidator,
            $userNameValidator,
            $options
        );

        $form = new Register(null, $options, $optionsMod);
        // $form->setCaptchaElement($sm->get('zfcuser_captcha_element'));
        $form->setInputFilter($inputFilter);

        return $form;
    }
}
