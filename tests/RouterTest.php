<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use LDH\Router;

final class RouterTest extends TestCase
{
    private $routerObj = NULL;

    protected function setUp() : void
    {
        $this->routerObj = new Router();
    }
}
