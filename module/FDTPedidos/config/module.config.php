<?php
return array(
    'router' => array(
        'routes' => array(
            'fdt-pedidos.rest.ptypes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ptypes[/:ptypes_id]',
                    'defaults' => array(
                        'controller' => 'FDTPedidos\\V1\\Rest\\Ptypes\\Controller',
                    ),
                ),
            ),
            'fdt-pedidos.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'FDTPedidos\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'fdt-pedidos.rest.ptypes',
            1 => 'fdt-pedidos.rest.users',
        ),
    ),
    'zf-rest' => array(
        'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => array(
            'listener' => 'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesResource',
            'route_name' => 'fdt-pedidos.rest.ptypes',
            'route_identifier_name' => 'ptypes_id',
            'collection_name' => 'ptypes',
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
            'entity_class' => 'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesEntity',
            'collection_class' => 'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesCollection',
            'service_name' => 'ptypes',
        ),
        'FDTPedidos\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'FDTPedidos\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'fdt-pedidos.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
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
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => 'FDTPedidos\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'FDTPedidos\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => 'HalJson',
            'FDTPedidos\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.fdt-pedidos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'FDTPedidos\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.fdt-pedidos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.fdt-pedidos.v1+json',
                1 => 'application/json',
            ),
            'FDTPedidos\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.fdt-pedidos.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'fdt-pedidos.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'fdt-pedidos.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'is_collection' => true,
            ),
            'FDTPedidos\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'fdt-pedidos.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'FDTPedidos\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'fdt-pedidos.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'FDTPedidos\\V1\\Rest\\Ptypes\\PtypesResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'ptypes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'FDTPedidos\\V1\\Rest\\Ptypes\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => array(
            'input_filter' => 'FDTPedidos\\V1\\Rest\\Ptypes\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'FDTPedidos\\V1\\Rest\\Ptypes\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'FDTPedidos\\V1\\Rest\\Users\\UsersResource' => 'FDTPedidos\\V1\\Rest\\Users\\UsersResourceFactory',
            'FDTPedidos\\V1\\Rest\\Users\\UsersRepository' => 'FDTPedidos\\V1\\Rest\\Users\\UsersRepositoryFactory',
        ),
    ),
);
