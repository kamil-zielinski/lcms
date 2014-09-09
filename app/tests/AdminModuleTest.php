<?php

class AdminModuleTest extends TestCase
{

    public function testModuleConfigExist()
    {
        $modulesConfig = Config::get('modules');
        $this->assertNotEmpty($modulesConfig);
        $this->assertContains('admin', $modulesConfig);
    }

    public function testModelAutoload()
    {
        $this->assertTrue(class_exists('Admin\Admin'));
    }

    public function testMainRouteResponse()
    {
        $this->call('GET', '/admin');
        $this->assertResponseOk();
    }
}