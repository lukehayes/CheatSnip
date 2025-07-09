<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use LDH\Route;

final class RouteTest extends TestCase
{
    private $route = NULL;

    protected function setUp() : void
    {
        $this->route = new Route('controller', 'action');
    }

    public function testCanGetControllerName()
    {
        $this->assertEquals($this->route->controller, 'controller');
    }

    public function testCanGetAction()
    {
        $this->assertEquals($this->route->action, 'action');
    }
}
