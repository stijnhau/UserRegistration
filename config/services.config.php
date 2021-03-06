<?php
use UserRegistration\Options;
use Zend\ServiceManager\ServiceLocatorInterface;

return [
    'factories' => array(
        'zfcuser_register_form'                         => 'userRegistration\Factory\Form\RegisterFormFactory',
        'userRegistration_module_options' => function (ServiceLocatorInterface $sm) {
            $config = $sm->get('Config');
            return new Options\ModuleOptions(isset($config['userRegistration']) ? $config['userRegistration'] : array());
        },
    ),
];
