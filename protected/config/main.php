<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
    return array(
        'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
        'name'       => 'My Web Application',
        // preloading 'log' component
       'preload'    => array('log','bootstrap', 'yiibooster'),
        // autoloading model and component classes
       
// autoloading model and component classes
'aliases' => array(
'bootstrap' => realpath(__DIR__ . '/../extensions/YiiBootstrap'), // change this if necessary
),
        'import'     => array(
            'application.models.*',
            'application.components.*',
            'application.components.AuthClass.*',
            'application.components.BaseClass.*',
             'application.widgets.YiiBootstrap.*',
        ),
        'modules'    => array(
            // uncomment the following to enable the Gii tool
            'gii' => array(
                'class'    => 'system.gii.GiiModule',
                'password' => 'vutung',
                'ipFilters'=>array('127.0.0.1','::1'),
            ),
        ),
        'behaviors'  => array(
            'runEnd' => array(
                'class' => 'application.components.WebApplicationEndBehavior',
            ),
        ),
        // application components
        'components' => array(
            'user'         => array(
                // enable cookie-based authentication
                'allowAutoLogin' => TRUE,
            ),
            // uncomment the following to enable URLs in path-format
            
              'urlManager'=>array(
              'urlFormat'=>'path',
//                  'showScriptName'=>false,
              'rules'=>array(
                  
//                  'team'=>array('site/teams', 'caseSensitive'=>false),
                  
              '<controller:\w+>/<id:\d+>'=>'<controller>/view',
              '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
              '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
              ),
              ),
             
            // uncomment the following to use a MySQL database
            'db'           => array(
                'connectionString' => 'mysql:host=localhost;dbname=iprofile2',
                'emulatePrepare'   => TRUE,
                'username'         => 'root',
                'password'         => '',
                'charset'          => 'utf8',
            ),
            'errorHandler' => array(
                // use 'site/error' action to display errors
                'errorAction' => 'site/error',
            ),
            'log'          => array(
                'class'  => 'CLogRouter',
                'routes' => array(
                    array(
                        'class'  => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                    // uncomment the following to show log messages on web pages
//                    array(
//                        'class' => 'CWebLogRoute',
//                    ),
                ),
            ),
        ),
        // application-level parameters that can be accessed
        // using Yii::app()->params['paramName']
        'params'     => array(
            // this is used in contact page
            'adminEmail' => 'nheo0510@gmail.com',
        ),
    );