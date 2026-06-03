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
		if (strpos($row->text, '<img') === false
			&& strpos($row->text, '<iframe') === false
			&& strpos($row->text, '<audio') === false
			&& strpos($row->text, '<video') === false
		)
		{
			return;
		}

		// Check and add the loading attribute for image tags
		if ($this->params->get('enabled_image', true) && preg_match_all('/<img\s[^>]+>/', $row->text, $imgMatches))
		{
			foreach ($imgMatches[0] as $image)
			{
				// Make sure we have a src but no loading attribute
				if (strpos($image, ' src=') !== false && strpos($image, ' loading=') === false)
				{
					$lazyloadImage = str_replace('<img ', '<img loading="lazy" ', $image);
					$row->text = str_replace($image, $lazyloadImage, $row->text);
				}
			}
		}

		// Check and add the loading attribute for iframe tags
		if ($this->params->get('enabled_iframe', false) && preg_match_all('/<iframe\s[^>]+>/', $row->text, $iframeMatches))
		{
			foreach ($iframeMatches[0] as $iframe)
			{
				// Make sure we have a src but no loading attribute
				if (strpos($iframe, ' src=') !== false && strpos($iframe, ' loading=') === false)
				{
					$lazyloadIframe = str_replace('<iframe ', '<iframe loading="lazy" ', $iframe);
					$row->text = str_replace($iframe, $lazyloadIframe, $row->text);
				}
			}
		}

		// Check and add the loading attribute for video tags
		if ($this->params->get('enabled_video', false) && preg_match_all('/<video\s[^>]+>/', $row->text, $videoMatches))
		{
			foreach ($videoMatches[0] as $video)
			{
				// Make sure we have a src but no loading attribute
				if (strpos($video, ' src=') !== false && strpos($video, ' loading=') === false)
				{
					$lazyloadVideo = str_replace('<video ', '<video loading="lazy" ', $video);
					$row->text = str_replace($video, $lazyloadVideo, $row->text);
				}
			}
		}

		// Check and add the loading attribute for audio tags
		if ($this->params->get('enabled_audio', false) && preg_match_all('/<audio\s[^>]+>/', $row->text, $audioMatches))
		{
			foreach ($audioMatches[0] as $audio)
			{
				// Make sure we have a src but no loading attribute
				if (strpos($audio, ' src=') !== false && strpos($audio, ' loading=') === false)
				{
					$lazyloadAudio = str_replace('<audio ', '<audio loading="lazy" ', $audio);
					$row->text = str_replace($audio, $lazyloadAudio, $row->text);
				}
			}
		}

	}
}
