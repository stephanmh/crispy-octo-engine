<?php
namespace CrispyOcto;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-21 at 20:58:40.
 */
class RunnerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Runner
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Runner('hi');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers CrispyOcto\Runner::sum     
     */
    public function testSum()
    {
        $this->assertEquals(3, $this->object->sum(1,2),3);
    }
}
