<?php
return array(
    'service_manager' => array(
        'invokables' => array(
            // Forces a distinct instance of the JsonRenderer for the RestfulJsonStrategy
            'PhlyRestfully\JsonRenderer' => 'Zend\View\Renderer\JsonRenderer',
        ),
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'apiProblemResult' => 'PhlyRestfully\Plugin\ApiProblemResult',
        ),
    ),
);