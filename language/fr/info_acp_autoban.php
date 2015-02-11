<?php

/**
*
* Auto Ban [French]
* French translation by Galixte (http://www.galixte.com)
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
	'AUTOBAN_ACTIVE'	=> 'Bannissement automatique',
	'AUTOBAN_ACTIVE_EXPLAIN'	=> 'Activer le bannissement automatique selon un certain nombre d’avertissements.',
	'AUTOBAN_COUNT'	=> 'Nombre d’avertissements',
	'AUTOBAN_COUNT_EXPLAIN'	=> 'Nombre d’avertissements pour un utilisateur à partir duquel il se verra bannir automatiquement.',
	'AUTOBAN_DURATION'	=> 'Durée du bannissement automatique',
	'AUTOBAN_DURATION_EXPLAIN'	=> 'Durée en jour du bannissement automatique.',
	'AUTOBAN_REASON'	=> 'Raison du bannissement automatique',
	'AUTOBAN_REASON_EXPLAIN'	=> 'Raison du bannissement automatique de l’utilisateur.'
));
