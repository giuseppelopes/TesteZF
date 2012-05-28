<?php

require_once APPLICATION_PATH .  DIRECTORY_SEPARATOR .'models'.  DIRECTORY_SEPARATOR .'Contato.php';

/**
 * Application_Model_Contato test case.
 */
class Application_Model_ContatoTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Application_Model_Contato
	 */
	private $Application_Model_Contato;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated Application_Model_ContatoTest::setUp()
		
		$this->Application_Model_Contato = new Application_Model_Contato(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated Application_Model_ContatoTest::tearDown()
		$this->Application_Model_Contato = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests Application_Model_Contato->_setupDatabaseAdapter()
	 */
	public function testSetupDatabaseAdapter() {
		$this->Application_Model_Contato->_setupDatabaseAdapter();
		
		$this->assertTrue($this->Application_Model_Contato->getAdapter() instanceof  Zend_Db_Adapter_Abstract);
	}
	
	/**
	 * Tests Application_Model_Contato->getAll()
	 */
	public function testGetAll() {
		// TODO Auto-generated Application_Model_ContatoTest->testGetAll()
		$this->markTestIncomplete ( "getAll test not implemented" );
		
		$this->Application_Model_Contato->getAll(/* parameters */);
	}
	
	/**
	 * Tests Application_Model_Contato->gelRecord()
	 */
	public function testGelRecord() {
		// TODO Auto-generated Application_Model_ContatoTest->testGelRecord()
		$this->markTestIncomplete ( "gelRecord test not implemented" );
		
		$this->Application_Model_Contato->gelRecord(/* parameters */);
	}
}

