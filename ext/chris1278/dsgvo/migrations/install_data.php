<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\migrations;

class install_data extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\dsgvo\migrations\install_permission'];
	}

	public function update_data()
	{
		return [
			['config.add', ['dsgvo_post_format', 1]],
			['config.add', ['dsgvo_post_read', 0]],
			['config.add', ['dsgvo_post_unapproved', 1]],
			['config.add', ['dsgvo_post_deleted', 1]],
		];
	}
}
