<?php
/**
*
* Birthday Control
*
* @copyright (c) 2014 Stanislav Atanasov
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace anavaro\autoban\tests\functional;

/**
* @group functional
*/
class autoban_base extends \phpbb_functional_test_case
{
	static protected function setup_extensions()
	{
		return array('anavaro/autoban');
	}

	public function setUp()
	{
		parent::setUp();
	}

	/**
	* Allow birthday (just to be sure) 
	*/
	public function allow_autoban($var = 1)
	{
		$this->get_db();

		$sql = "UPDATE phpbb_config
			SET config_value = $var
			WHERE config_name = 'autoban_active'";

		$this->db->sql_query($sql);

		$this->purge_cache();
	}
	
}