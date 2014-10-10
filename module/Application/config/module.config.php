<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Console' => 'Application\Controller\ConsoleController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/console',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Console',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Application' => __DIR__ . '/../view',
        ),
    ),
    
    'console' => array(
        'router' => array(
        				'routes' => array(
        				    'crontask-use' => array(
        				        'options' => array(
        				            // add [ and ] if optional ( ex : [<doname>] )
        				            'route' => 'crontask [--verbose|-v] <doname>',
        				            'defaults' => array(
        				                '__NAMESPACE__' => 'Application\Controller',
        				                'controller' => 'Console',
        				                'action' => 'index'
        				            ),
        				        ),
        				    ),
        				)
        )
    ),
    
);
