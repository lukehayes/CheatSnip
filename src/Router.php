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
		// array_filter is used here to remove the first
		// index from the array that results from
		// calling explode() as it is 0.
		return
			array_filter(
				explode('/', $this->uri),
				fn($elem) => !empty($elem)
			);
	}
}
