<?php

/**
*
* Auto Ban [Arabic]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'AUTOBAN_ACTIVE'	=> 'الحظر التلقائي ',
	'AUTOBAN_ACTIVE_EXPLAIN'	=> 'تفعيل الحظر عند الوصول إلى عدد مُحدد من الإنذارات',
	'AUTOBAN_COUNT'	=> 'عدد الإنذارات ',
	'AUTOBAN_COUNT_EXPLAIN'	=> 'سيتم حظر العضو بعد هذا العدد من الإنذارات',
	'AUTOBAN_DURATION'	=> 'مُدة الحظر ',
	'AUTOBAN_DURATION_EXPLAIN'	=> 'سيتم رفع الحظر عن العضو بعد هذه المُدة ( بالأيام )',
	'AUTOBAN_REASON'	=> 'سبب الحظر ',
	'AUTOBAN_REASON_EXPLAIN'	=> 'سبب حظر العضو'
));
