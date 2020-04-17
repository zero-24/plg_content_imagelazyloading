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
	 * Plugin that adds the lazyloading attribute on the fly
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   object   &$row     The article object.  Note $article->text is also available
	 * @param   mixed    &$params  The article params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  mixed  Always returns void or true
	 *
	 * @since   1.0.0
	 */
	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
		// Code goes here
	}
}
