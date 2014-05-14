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
            'test.rest.resttest' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/resttest[/:resttest_id]',
                    'defaults' => array(
                        'controller' => 'test\\V1\\Rest\\Resttest\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rpc.test',
            1 => 'test.rpc.test2',
            2 => 'test.rest.resttest',
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
            'test\\V1\\Rest\\Resttest\\Controller' => 'HalJson',
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
            'test\\V1\\Rest\\Resttest\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
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
            'test\\V1\\Rest\\Resttest\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'test\\V1\\Rest\\Resttest\\ResttestResource' => 'test\\V1\\Rest\\Resttest\\ResttestResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'test\\V1\\Rest\\Resttest\\Controller' => array(
            'listener' => 'test\\V1\\Rest\\Resttest\\ResttestResource',
            'route_name' => 'test.rest.resttest',
            'route_identifier_name' => 'resttest_id',
            'collection_name' => 'resttest',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'test\\V1\\Rest\\Resttest\\ResttestEntity',
            'collection_class' => 'test\\V1\\Rest\\Resttest\\ResttestCollection',
            'service_name' => 'resttest',
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'test\\V1\\Rest\\Resttest\\ResttestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.resttest',
                'route_identifier_name' => 'resttest_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'test\\V1\\Rest\\Resttest\\ResttestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.resttest',
                'route_identifier_name' => 'resttest_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'test\\V1\\Rest\\Testsql\\TestsqlResource' => array(
                'adapter_name' => 'test_sqlite',
                'table_name' => 'testsql',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'test\\V1\\Rest\\Testsql\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
);
