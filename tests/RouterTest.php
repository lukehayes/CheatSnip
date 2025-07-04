<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use LDH\Router;

final class RouterTest extends TestCase
{
    private $routerObj = NULL;

    protected function setUp() : void
    {
        //$this->routerObj = new Router();
    }

    public function testCanSplitRequestUri()
    {
        $router = new Router('controller/action');
        $uri_sections = $router->splitRequestUri();

        $this->assertContains('controller', $uri_sections);
        $this->assertContains('action', $uri_sections);
    }

    public function testCanGetUri()
    {
        $router = new Router('controller/action');
        $this->assertEquals($router->getUri(), 'controller/action');
    }

    public function testCanParsedUri()
    {
        $router = new Router('controller/action');

        $this->assertIsArray($router->getParsedUri());
    }
}
