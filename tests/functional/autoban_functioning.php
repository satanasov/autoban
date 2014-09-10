<?php
/**
*
* Autoban test
*
* @copyright (c) 2014 Stanislav Atanasov
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace anavaro\autoban\tests\functional;

/**
* @group functional
*/
class autoban_functioning extends autoban_base
{
	public function test_main()
	{
		//add users so we can test medals
		$this->create_user('testuser1');
		$this->add_user_group('NEWLY_REGISTERED', array('testuser1'));

		$this->login();
		$this->add_lang('mcp');
		
		$crawler = self::request('GET', 'mcp.php?i=warn&mode=warn_user&u=' . $this->get_user_id('testuser1') . '&sid=' . $this->sid);
		
		$form = $crawler->selectButton($this->lang('SUBMIT'))->form();
		$form['warning'] = 'Test';
		
		$crawler = self::submit($form);
		
		$this->assertContainsLang('USER_WARNING_ADDED', $crawler->text());
		
		$crawler = self::request('GET', 'mcp.php?i=warn&mode=warn_user&u=' . $this->get_user_id('testuser1') . '&sid=' . $this->sid);
		
		$form = $crawler->selectButton($this->lang('SUBMIT'))->form();
		$form['warning'] = 'Test';
		
		$crawler = self::submit($form);
		
		$this->assertContainsLang('USER_WARNING_ADDED', $crawler->text());
		
		$this->logout();
		
		$this->assertEquals(1, $this->is_banned($this->get_user_id('testuser1')));
	}
}