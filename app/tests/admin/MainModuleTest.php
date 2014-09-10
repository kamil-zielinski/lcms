<?php

namespace AdminTest;

class MainModuleTest extends \TestCase
{

    public function setUp()
    {
        parent::setUp();
        // Enable filters
        \Route::enableFilters();
    }

    public function testModuleConfigExist()
    {
        $modulesConfig = \Config::get('modules');
        $this->assertContains('admin', $modulesConfig);
    }

    public function testModelAutoload()
    {
        $this->assertTrue(class_exists('\Admin\Admin'));
    }

    public function testMainRouteResponse()
    {
        $this->call('GET', 'admin');
        $this->assertResponseOk();
    }
}