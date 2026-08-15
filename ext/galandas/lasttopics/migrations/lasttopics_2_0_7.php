<?php
/**
*
* @package phpBB Extension - Advanced Active Topics
* @copyright (c) 2017 Galandas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace galandas\lasttopics\migrations;

class lasttopics_2_0_7 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\galandas\lasttopics\migrations\lasttopics_2_0_6',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('last_topic_version', '2.0.7')),
		);
	}
}