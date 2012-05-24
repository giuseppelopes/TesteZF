<?php
require_once APPLICATION_PATH .  DIRECTORY_SEPARATOR .'models'.  DIRECTORY_SEPARATOR .'Validator.php';
//require_once 'PHPUnit\Framework\TestCase.php';

/**
 * Application_Model_Validator test case.
 */
class Application_Model_ValidatorTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Application_Model_Validator
	 */
	private $Application_Model_Validator;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated Application_Model_ValidatorTest::setUp()
		
		$this->Application_Model_Validator = new Application_Model_Validator();
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated Application_Model_ValidatorTest::tearDown()
		$this->Application_Model_Validator = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests Application_Model_Validator::myIsSet()
	 */
	public function testMyIsSet() {
		// TODO Auto-generated Application_Model_ValidatorTest::testMyIsSet()
		//$this->markTestIncomplete ( "myIsSet test not implemented" );
		$this->assertTrue(Application_Model_Validator::myIsSet("testes"), "Teste para a variavel testes");
		;
	}
}

