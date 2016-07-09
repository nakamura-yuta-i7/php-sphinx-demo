<?php

class TestBatchTest extends PHPUnit_Framework_TestCase {
    function test01() {
        $this->assertEquals(0, count([]));
    }
}