<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'MOS',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Aditi01*',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),
	// language
	'language' => 'en',
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		//email configuration
		 'mail'=>array(
        	'class' => 'application.extensions.yii-mail.YiiMail',  
	          'transportType'=>'smtp', /// case sensitive!
	          'transportOptions'=>array(
	            'host'=> 'smtp.gmail.com',
	            ),
	        'logging' => true,
	        'dryRun' => false
    	),
		
		'session' => array(
        'savePath' => '/home/nataraja/tmp',
        'cookieMode' => 'allow',
        'cookieParams' => array(
            'path' => '/',
            'domain' => '.natarajanonline.com',
            'httpOnly' => true,
        ),
    	),
		
		'urlManager'=>array(
			'urlFormat'=>'path',
		 	'showScriptName' => false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=nataraja_mos',
			'emulatePrepare' => true,
			'username' => 'nataraja_mosuser',
			'password' => 'Aditi01*',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'trace,info,error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				//end of log message on webpage
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'resourceUrl' => 'http://natarajanonline.com/mos',
		'homeUrl' => 'http://natarajanonline.com/mos/index.php',
		'mediaUrl' => 'http://natarajanonline.com/mos/images',
		'sslmediaUrl' => 'https://natarajanonline.com/mos/images',
		'scriptUrl' => 'http://natarajanonline.com/mos',
		'sslScriptUrl' => 'https://natarajanonline.com/mos',
		'ftpPath' => '/home/nataraja/mos',
		'version' => time(),
	),
);