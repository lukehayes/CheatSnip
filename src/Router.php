<?php

namespace LDH;

class Router
{
	/** @var string The request URI */
	private $uri;

	private $parsed_uri;

	/** @var string Sections of the REQUEST URI split by '/' char */
	private $uri_sections;

	public function __construct(string $uri)
	{
		$this->uri = $uri;
		$this->parsed_uri = parse_url($uri);
	}

	public function getParsedUri() : array
	{
		return $this->parsed_uri;
	}

	public function getUri() : string
	{
		return $this->uri;
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
