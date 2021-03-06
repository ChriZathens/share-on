<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon\migrations;

class install_shareon_3_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['shareon_version']) && version_compare($this->config['shareon_version'], '2.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\vinny\shareon\migrations\install_shareon_2_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('so_pocket', 1)),
			array('config.update', array('shareon_version', '2.0.1')),
		);
	}
}
