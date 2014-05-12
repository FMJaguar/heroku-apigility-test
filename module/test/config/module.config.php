<?php
return array(
    'controllers' => array(
        'factories' => array(
            'test\\V1\\Rpc\\Test\\Controller' => 'test\\V1\\Rpc\\Test\\TestControllerFactory',
            'test\\V1\\Rpc\\Test2\\Controller' => 'test\\V1\\Rpc\\Test2\\Test2ControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'test.rpc.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => 'test/',
                    'defaults' => array(
                        'controller' => 'test\\V1\\Rpc\\Test\\Controller',
                        'action' => 'test',
                    ),
                ),
            ),
            'test.rpc.test2' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => 'test2',
                    'defaults' => array(
                        'controller' => 'test\\V1\\Rpc\\Test2\\Controller',
                        'action' => 'test2',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rpc.test',
            1 => 'test.rpc.test2',
        ),
    ),
    'zf-rpc' => array(
        'test\\V1\\Rpc\\Test\\Controller' => array(
            'service_name' => 'test',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'test.rpc.test',
        ),
        'test\\V1\\Rpc\\Test2\\Controller' => array(
            'service_name' => 'test2',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'test.rpc.test2',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'test\\V1\\Rpc\\Test\\Controller' => 'Json',
            'test\\V1\\Rpc\\Test2\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'test\\V1\\Rpc\\Test\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'test\\V1\\Rpc\\Test2\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'test\\V1\\Rpc\\Test\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
            'test\\V1\\Rpc\\Test2\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
);
