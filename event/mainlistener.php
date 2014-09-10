<?php

/**
*
* Birthday Control extension for the phpBB Forum Software package.
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
	protected $bday_array;

	static public function getSubscribedEvents()
	{
		return array(
			'core.mcp_warn_user_after'	=> 'main_funct',
		);
	}

	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param \phpbb\auth		$auth		Auth object
	* @param \phpbb\cache\service	$cache		Cache object
	* @param \phpbb\config	$config		Config object
	* @param \phpbb\db\driver	$db		Database object
	* @param \phpbb\request	$request	Request object
	* @param \phpbb\template	$template	Template object
	* @param \phpbb\user		$user		User object
	* @param \phpbb\controller\helper		$helper				Controller helper object
	* @param \phpbb\controller\log		$log				log
	* @param string			$root_path	phpBB root path
	* @param string			$php_ext	phpEx
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, $root_path, $php_ext)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	public function main_funct($event)
	{
		if($this->config['autoban_active'] && ($event['user_row']['user_warnings'] + 1) >= $this->config['autoban_count'])
		{
			include($this->root_path . 'includes/functions_user.' . $this->php_ext);
			user_ban('user', utf8_normalize_nfc($event['user_row']['username']), $this->config['autoban_duration'] * 60 * 24, '', '', $this->config['autoban_reason'], $this->config['autoban_reason']);
		}
	}

	public function var_display($event)
	{
		echo '<pre>';
		print_r($event);
		echo '</pre>';
	}

}
