<?php
namespace CrispyOcto;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-21 at 22:09:18.
 */
class DaciaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Dacia
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Dacia;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testFailure(){
        $this->assertEquals(1,6);
    }

    public function testFailure1(){
        $this->assertEquals(1,6);
    }

    public function testFailure2(){
        $this->assertEquals(1,6);
    }

    public function testFailure3(){
        $this->assertEquals(1,6);
    }

    public function testFailure4(){
        $this->assertEquals(1,6);
    }

    public function testSetEngine(){
        $engine = new Otto();
        $this->object->setEngine($engine);
        $this->assertEquals($engine,$this->object->getEngine());
    }
}
