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
        $_SERVER['REQUEST_URI'] = 'controller/action';

        $router = new Router();
        $uri_sections = $router->splitRequestUri();

        $this->assertContains('controller', $uri_sections);
        $this->assertContains('action', $uri_sections);
    }
}
