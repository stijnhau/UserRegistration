<?php
use Zend\ServiceManager\ServiceLocatorInterface;
use UserRegistration\Options;

return [
    'factories' => array(
        'userRegistration_module_options' => function (ServiceLocatorInterface $sm) {
            $config = $sm->get('Config');
            return new Options\ModuleOptions(isset($config['userRegistration']) ? $config['userRegistration'] : array());
        },
    ),
];
