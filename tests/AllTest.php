<?php
require_once 'bootstrap.php';
//require_once 'PHPUnit\Framework\TestSuite.php';

require_once 'application'.  DIRECTORY_SEPARATOR .'models'. DIRECTORY_SEPARATOR .'Application_Model_ValidatorTest.php';
require_once 'application'. DIRECTORY_SEPARATOR .'controllers'. DIRECTORY_SEPARATOR .'IndexControllerTest.php';

/**
 * Static test suite.
 */
class AllTest extends PHPUnit_Framework_TestSuite {
	
	/**
	 * Constructs the test suite handler.
	 */
	public function __construct() {
		$this->setName ( 'AllTest' );
		
		$this->addTestSuite ( 'Application_Model_ValidatorTest' );
		
		$this->addTestSuite ( 'IndexControllerTest' );
	}
	
	/**
	 * Creates the suite.
	 */
	public static function suite() {
		return new self ();
	}
}

