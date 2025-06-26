<?php

namespace LDH;


class Router
{
	/** @var string The request URI */
	public $uri;

	/** @var string Sections of the REQUEST URI split by '/' char */
	private $uri_sections;

	public function __construct()
	{
		$this->uri = $_SERVER['REQUEST_URI'];
	}

	/**
	 * Split the $_SERVER['REQUEST_URI'] by the '/' character
	 *
	 * @return array
	 */
	public function splitRequestUri() : array
	{
		return
			array_filter(
				explode('/', $this->uri),
				fn($elem) => !empty($elem)
			);
	}
}
