<?php
/**
 * ImageLazyloading Plugin
 *
 * @copyright  Copyright (C) 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Plugin adds the lazyloading attribute on the fly
 *
 * @since  1.0
 */
class PlgContentImageLazyloading extends CMSPlugin
{
	/**
	 * Plugin that adds on the fly the loading=lazy attribute to image tags
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   object   &$row     The article object.
	 * @param   mixed    &$params  The article params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  mixed  Always returns void
	 *
	 * @since   1.0.0
	 */
	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
		if (strpos($row->text, '<img') === false)
		{
			return;
		}

		if (!preg_match_all('/<img\s[^>]+>/', $row->text, $matches))
		{
			return;
		}

		foreach ($matches[0] as $image)
		{
			// Make sure we have a src but no loading attribute
			if (strpos($image, ' src=') !== false && strpos($image, ' loading=') === false)
			{
				$lazyloadImage = str_replace('<img ', '<img loading="lazy" ', $image);
				$row->text = str_replace($image, $lazyloadImage, $row->text);
			}
		}
	}
}
