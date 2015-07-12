<?php
return [
    'view_manager' => [
        'template_path_stack' => [
            'UserRegistration' => __DIR__ . '/../view',
        ],
    ],
    'router' => array(
        'routes' => array(
            'zfcuser/register' => array(
                'type' => 'Literal',
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
