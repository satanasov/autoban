<?php

/**
*
* Auto Ban [Russian]
* Russian translation by Kot Matroskin (https://mindreader.hacktest.net/en/)
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
		exit;
}
if (empty($lang) || !is_array($lang))
{
		$lang = array();
}

$lang = array_merge($lang, array(
	'AUTOBAN_ACTIVE'	=> 'Автоматический бан',
	'AUTOBAN_ACTIVE_EXPLAIN'	=> 'Автоматический бан при определенном количестве предупреждений.',
	'AUTOBAN_COUNT'	=> 'Количество предупреждений',
	'AUTOBAN_COUNT_EXPLAIN'	=> 'Количество предупреждений для автоматического бана пользователя.',
	'AUTOBAN_DURATION'	=> 'Продолжительность',
	'AUTOBAN_DURATION_EXPLAIN'	=> 'Продолжительность бана в днях.',
	'AUTOBAN_REASON'	=> 'Причина бана',
	'AUTOBAN_REASON_EXPLAIN'	=> 'Публикуемая причина бана пользователя.'
));
