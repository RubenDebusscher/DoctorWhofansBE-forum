<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\migrations;

class V_2_0_4 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\V_2_0_3'];
	}

	public function update_schema()
	{
		return [
			'add_tables'	=> [
				$this->table_prefix . 'chris1278_cookie_scripts'	=> [
					'COLUMNS'	=> [
						'script_name'		=> ['VCHAR:255', ''],
						'script_code'		=> ['TEXT_UNI', ''],
					],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables'	=> [
				$this->table_prefix . 'chris1278_cookie_scripts',
			],
		];
	}

	public function update_data()
	{
		return [
			['config.add',['amazon_switch', 0]],
			['config.add',['data_name_amazon', 'amazon']],
			['custom', [[$this, 'import_cookie_script']]],
		];
	}


	public function import_cookie_script()
	{
		$sql_ary = [];

		$sql_ary[] = [
			'script_name'		=> 'gaos_pos1',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'gaos_pos2',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'matomo_pos1',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'matomo_pos2',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'goads_pos1',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'goads_pos2',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'gomaps_pos1',
			'script_code'		=> '',
		];

		$sql_ary[] = [
			'script_name'		=> 'gomaps_pos2',
			'script_code'		=> '',
		];

		$this->db->sql_multi_insert($this->table_prefix . 'chris1278_cookie_scripts' , $sql_ary);
	}
}
