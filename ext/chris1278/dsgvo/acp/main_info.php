<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\acp;

/**
 * dsgvo ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\chris1278\dsgvo\acp\main_module',
			'title'		=> 'ACP_DSGVO_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_DSGVO_SETTINGS',
					'auth'	=> 'ext_chris1278/dsgvo && acl_a_board',
					'cat'	=> ['ACP_DSGVO_TITLE'],
				],
			],
		];
	}
}
