<?php

namespace LDH;

/**
 * Class represents a simple way to display template files.
 */
class View
{
	/** @var string TEMPLATE_PATH Template path location. */
	private const TEMPLATE_PATH = "../template/";

	/**
	 * Render raw content inside the pre required header and footer templates.
	 */
	public function renderRaw($content) : void
	{
		require_once(View::TEMPLATE_PATH . 'header.php');

		echo $content;

		require_once(View::TEMPLATE_PATH . 'footer.php');
	}
}
