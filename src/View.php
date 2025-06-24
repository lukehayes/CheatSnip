<?php

namespace LDH;

/**
 * Class represents a simple way to display template files.
 */
class View
{
	/** @var string TEMPLATE_PATH Template path location. */
	private const TEMPLATE_PATH = "../template/";

	/** @var string PAGE_PATH Template path location. */
	private const PAGE_PATH = "../template/page/";

	/**
	 * Render raw content inside the pre required header and footer templates.
	 */
	public function renderRaw($content) : void
	{
		require_once(View::TEMPLATE_PATH . 'header.php');

		echo $content;

		require_once(View::TEMPLATE_PATH . 'footer.php');
	}

	/**
	 * Render a view using a template name.
	 *
	 * @param string $template The name of the template file.
	 * @param array  $data Values to be sent to the template.
	 *
	 */
	public function render($template, ...$data)
	{
		require_once(View::TEMPLATE_PATH . 'header.php');

		require_once(View::PAGE_PATH . $template .'.php');

		require_once(View::TEMPLATE_PATH . 'footer.php');
	}

}
