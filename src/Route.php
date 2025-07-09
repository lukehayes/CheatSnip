<?php

namespace LDH;

class Route
{
	public function __construct(
		public string $controller,
		public string $action,
	){}
}
