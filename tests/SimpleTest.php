<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
        echo "✓ Test passed: 2 + 2 = 4\n";
    }
    
    public function testString()
    {
        $text = "Hello Jenkins";
        $this->assertEquals("Hello Jenkins", $text);
        echo "✓ Test passed: String matches\n";
    }
    
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
        echo "✓ Test passed: True is true\n";
    }
}