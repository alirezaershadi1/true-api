<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(dirname(__FILE__)) .'/TrueApiController.php';

/**
 * Test class for TrueApiController.
 * Generated by PHPUnit on 2009-11-20 at 14:02:28.
 */
class TrueApiControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var    TrueApiController
     * @access protected
     */
    protected $TrueApiController;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp()
    {
        $this->TrueApiController = new TrueApiController('servers', array('MockTrueApi', 'rest'));
    }
    
    public function testIndex()
    {   
        $actual   = $this->TrueApiController->index();
        $expected = array (
            'method' => 'get',
            'path' => 'servers/index',
            'vars' => array(

            ),
        );
        $this->assertSame($expected, $actual);
    }
}

class MockTrueApi {
    public function rest($method, $path, $vars) {
        return compact('method', 'path', 'vars');
    }
}
?>