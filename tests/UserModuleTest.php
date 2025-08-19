<?php
use PHPUnit\Framework\TestCase;

class UserModuleTest extends TestCase
{
    public function testModuleClassExists()
    {
        $this->assertTrue(class_exists('app\\modules\\user\\Module'));
    }

    public function testUserModelExists()
    {
        $this->assertTrue(class_exists('app\\modules\\user\\models\\User'));
    }

    public function testAuthControllerExists()
    {
        $this->assertTrue(class_exists('app\\modules\\user\\controllers\\AuthController'));
    }
}
