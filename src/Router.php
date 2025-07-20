<?php

namespace LDH;

class Router
{
	/** @var string The request URI */
	private $uri;

	/** @var array The parsed request uri */
	private $parsed_uri;

	/** @var string Sections of the REQUEST URI split by '/' char */
	private $uri_sections;

	public function __construct(string $uri)
	{
		$this->uri = $uri;
		$this->parsed_uri = parse_url($uri);
	}

	/**
	 * Get the parsed uri.
	 *
	 * @return array
	 */
	public function getParsedUri() : array
	{
		return $this->parsed_uri;
	}

	/**
	 * Get the request uri.
	 *
	 * @return string
	 */
	public function getUri() : string
	{
		return $this->uri;
	}

	/**
	 * Split the REQEUST_URI by the '/' character.
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

	/**
	 * Get a section of the URI by key.
	 *
	 * Keys that can be used: 'host'
	 *                        'port'
	 *                        'scheme'
	 *                        'user'
	 *                        'query'
	 *                        'fragment'
	 *
	 * @param string $key The key of the array to retieve
	 */
	public function getUriSection(string $key)
	{
		if (array_key_exists($key, $this->parsed_uri )) {
			return $this->parsed_uri[$key];
		}
	}
}
