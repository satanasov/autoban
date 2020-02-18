<?php
/**
 *
 * phpBB Auto Ban
 *
 * @copyright (c) 2017 Lucifer <https://www.anavaro.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace anavaro\autoban\tests\event;

/**
 * @group event
 */

class listner_test extends \phpbb_database_test_case
{
	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/fixtures/fixture.xml');
	}

	/**
	 * Define the extensions to be tested
	 *
	 * @return array vendor/name of extension(s) to test
	 */
	static protected function setup_extensions()
	{
		return array('anavaro/autoban');
	}

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	 * Setup test environment
	 */
	public function setUp() : void
	{
		parent::setUp();

		$this->language = $this->getMockBuilder('\phpbb\language\language')
			->disableOriginalConstructor()
			->getMock();

		$this->config = new \phpbb\config\config(
			array(

			)
		);
	}

	public function set_acp_listner()
	{
		$this->acp_listner = new \anavaro\autoban\event\acplistener(
			$this->language
		);

	}

	public function set_main_listner()
	{
		$this->main_listner = new \anavaro\autoban\event\mainlistener(
			$this->config,
			'/',
			'php'
		);
	}

	public function test_acp_listner_getSubscribedEvents()
	{
		$this->assertEquals(array(
			'core.acp_board_config_edit_add'
		), array_keys(\anavaro\autoban\event\acplistener::getSubscribedEvents()));
	}

	public function test_main_listner_getSubscribedEvents()
	{
		$this->assertEquals(array(
			'core.mcp_warn_user_after',
			'core.mcp_warn_post_after'
		), array_keys(\anavaro\autoban\event\mainlistener::getSubscribedEvents()));
	}


}
