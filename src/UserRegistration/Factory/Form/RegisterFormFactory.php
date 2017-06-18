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
        return $this->__invoke($serviceManager, "ExclusionIpServiceFactory");
    }

    /**
     * {@inheritDoc}
     * @see \Zend\ServiceManager\Factory\FactoryInterface::__invoke()
     */
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var $options Options\ModuleOptions */
        $options = $container->get('zfcuser_module_options');

        /* @var $optionsMod Options\ModuleOptions */
        $optionsMod = $container->get('userRegistration_module_options');

        $userMapper = $container->get('zfcuser_user_mapper');

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
        // $form->setCaptchaElement($container->get('zfcuser_captcha_element'));
        $form->setInputFilter($inputFilter);

        return $form;
    }
}
