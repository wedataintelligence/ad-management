<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\admanagement\tests\functional;

/**
* @group functional
*/
class location_below_footer_test extends location_base
{
	/**
	* {@inheritDoc}
	*/
	public function setUp()
	{
		parent::setUp();
	}

	public function test_location_below_footer()
	{
		$ad_code = $this->create_ad('below_footer');

		$crawler = self::request('GET', "index.php");

		// Confirm below footer ad is last visible body children
		$this->assertContains($ad_code, $crawler->filter('.ad-center')->last()->html());
	}
}