<?php

/**
*
* Auto Ban extension - Main listener
*
* @copyright (c) 2014 Lucifer <http://www.anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace anavaro\autoban\event;

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class mainlistener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var %root_path% */
	protected $root_path;

	/** @var %php_ext% */
	protected $php_ext;

	/**
	 * Constructor
	 * NOTE: The parameters of this method must match in order and type with
	 * the dependencies defined in the services.yml file for this service.
	 *
	 * @param \phpbb\config\config     $config
	 * @param                          $root_path
	 * @param                          $php_ext
	 */
	public function __construct(\phpbb\config\config $config, $root_path, $php_ext)
	{
		$this->config = $config;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.mcp_warn_user_after'	=> 'user_funct',
			'core.mcp_warn_post_after'	=> 'post_funct',
		);
	}

	public function user_funct($event)
	{
		if ($this->config['autoban_active'] && ($event['user_row']['user_warnings'] + 1) >= $this->config['autoban_count'])
		{
			if (!function_exists('user_ban'))
			{
				include($this->root_path . 'includes/functions_user.' . $this->php_ext);
			}
			user_ban('user', utf8_normalize_nfc($event['user_row']['username']), $this->config['autoban_duration'] * 60 * 24, '', '', $this->config['autoban_reason'], $this->config['autoban_reason']);
		}
	}
	public function post_funct($event)
	{
		if ($this->config['autoban_active'] && ($event['user_row']['user_warnings'] + 1) >= $this->config['autoban_count'])
		{
			if (!function_exists('user_ban'))
			{
				include($this->root_path . 'includes/functions_user.' . $this->php_ext);
			}
			user_ban('user', utf8_normalize_nfc($event['user_row']['username']), $this->config['autoban_duration'] * 60 * 24, '', '', $this->config['autoban_reason'], $this->config['autoban_reason']);
		}
	}
}
