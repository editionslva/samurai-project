<?php
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{

    public function testDummy()
    {
        $dummy = new Dummy();
        $this->assertTrue($dummy->getTrue());
    }
}
