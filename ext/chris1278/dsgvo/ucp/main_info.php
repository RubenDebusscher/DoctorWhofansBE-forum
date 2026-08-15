<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\ucp;

/**
 * dsgvo UCP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\chris1278\dsgvo\ucp\main_module',
			'title'		=> 'UCP_DSGVO_TITLE',
			'modes' => [
				'dsgvo_overview'			=> [
					'title'	=> 'UCP_DSGVO_OVERVIEW',
					'auth' => 'ext_chris1278/dsgvo',
					'cat' => ['UCP_DSGVO_MODULE'],
				],
				'profile_download'	=> [
					'title'	=> 'UCP_DSGVO_PROFILE_DOWNLOAD',
					'auth' => 'ext_chris1278/dsgvo',
					'cat' => ['UCP_DSGVO_MODULE'],
				],
				'data_download' => [
					'title'	=> 'UCP_DSGVO_DATA_DOWNLOAD',
					'auth' => 'ext_chris1278/dsgvo',
					'cat' => ['UCP_DSGVO_MODULE'],
				],
			],
		];
	}
}
