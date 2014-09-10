<?php

class AdminModuleTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        // Enable filters
        Route::enableFilters();
    }

    public function testModuleConfigExist()
    {
        $modulesConfig = Config::get('modules');
        $this->assertContains('admin', $modulesConfig);
    }

    public function testModelAutoload()
    {
        $this->assertTrue(class_exists('Admin\Admin'));
    }

/*    public function testRoutesIncluded()
    {
        $this->assertContains(
            app_path().'\modules\admin\routes.php',
            get_included_files()
        );
    }*/

    public function testMainRouteResponse()
    {
        $this->call('GET', 'admin');
        $this->assertResponseOk();
    }
}