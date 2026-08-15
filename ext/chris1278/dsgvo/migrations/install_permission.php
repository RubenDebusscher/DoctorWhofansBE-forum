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

class install_permission extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\dsgvo\migrations\install_ucp_module'];
	}

	public function update_data()
	{
		return [
			['permission.add', ['u_dsgvo_profile_download']],
				['permission.permission_set', ['REGISTERED', 'u_dsgvo_profile_download', 'group']],
			['permission.add', ['u_dsgvo_posts_download']],
				['permission.permission_set', ['REGISTERED', 'u_dsgvo_posts_download', 'group']],
		];
	}
}
