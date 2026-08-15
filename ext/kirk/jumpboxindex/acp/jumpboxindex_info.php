<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\acp;

class jumpboxindex_info
{
	function module()
	{
		return [
			'filename'	=> '\kirk\jumpboxindex\acp\jumpboxindex_module',
			'title'		=> 'ACP_JUMPBOXINDEX',
			'modes'		=> [
				'settings'		=> [
					'title'		=> 'ACP_JUMPBOXINDEX_SETTINGS',
					'auth'		=> 'ext_kirk/jumpboxindex && acl_a_board',
					'cat'		=> ['ACP_JUMPBOXINDEX'],
				],
			],
		];
	}
}
