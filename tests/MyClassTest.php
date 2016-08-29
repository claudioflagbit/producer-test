<?php

namespace ProducerTest\Test;

use ProducerTest\MyClass;

class MyClassTest extends \PHPUnit_Framework_TestCase
{
    public function testGetValue()
    {
        $this->assertSame('value', (new MyClass())->getValue());
    }
}
