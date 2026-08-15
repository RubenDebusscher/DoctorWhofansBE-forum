<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\chris1278\cookie\acp\main_module',
			'title'		=> 'ACP_COOKIE_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_COOKIE_GENERAL',
					'auth'	=> 'ext_chris1278/cookie && acl_a_board',
					'cat'	=> ['ACP_COOKIE_TITLE'],
				],
				'manage'	=> [
					'title'	=> 'ACP_COOKIE_SWITCHES',
					'auth'	=> 'ext_chris1278/cookie && acl_a_board',
					'cat'	=> ['ACP_COOKIE_TITLE'],
				],
			],
		];
	}
}
