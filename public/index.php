<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);


$resource = $application->getOption('resources');
Zend_Registry::set(
		'database',
		new Zend_Db_Adapter_Mysqli(
				array(
						'host' => $resource['db']['host'],
						'dbname' => $resource['db']['base'],
						'username' => $resource['db']['user'],
						'password' => $resource['db']['pass'],
						'charset' => 'utf8'
				)
		)
);


$application->bootstrap()
            ->run();