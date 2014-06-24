<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
    // Sección nueva donde definimos las reglas de ruteo y el ruteado principal
    'router' => array(
        'routes' => array(
            'album' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/album[/:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Album\Controller',
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),

                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);

