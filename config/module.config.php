<?php
namespace UserRegistration;

use Zend\Router\Http\Literal;

return [
    'service_manager' => array(
        'factories' => array(
            'zfcuser_register_form'                         => 'UserRegistration\Factory\Form\RegisterFormFactory',
        ),
    ),
    'view_manager' => [
        'template_path_stack' => [
            'UserRegistration' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => array(
        'factories' => array(
            'register' => 'UserRegistration\Factory\Controller\Register',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser/register' => array(
                'type' => Literal::class,
                'priority' => 1000,
                'options' => array(
                    'route' => '/user/register',
                    'defaults' => array(
                        'controller' => 'register',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
];
