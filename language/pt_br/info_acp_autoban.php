<?php

/**
*
* Auto Ban [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese  translation by eunaumtenhoid (c) 2017 [ver 1.0.1-1] (https://github.com/phpBBTraducoes)
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'AUTOBAN_ACTIVE'	=> 'Auto Ban',
	'AUTOBAN_ACTIVE_EXPLAIN'	=> 'Ative o banimento para determinado número de advertências',
	'AUTOBAN_COUNT'	=> 'Quantidade de Advertências',
	'AUTOBAN_COUNT_EXPLAIN'	=> 'Quantas advertências para o banimento automático do usuário',
	'AUTOBAN_DURATION'	=> 'Duração do Auto Banimento',
	'AUTOBAN_DURATION_EXPLAIN'	=> 'Período em dias para o banimento automático',
	'AUTOBAN_REASON'	=> 'Razão do banimento',
	'AUTOBAN_REASON_EXPLAIN'	=> 'Razão por banir usuário'
));
