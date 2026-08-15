<?php

/**
 * @package Verified Profiles
 * @copyright (c) 2021 Daniel James
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace danieltj\verifiedprofiles\migrations;

class update_users_table extends \phpbb\db\migration\migration {

	/**
	 * Check if this has already been run.
	 */
	public function effectively_installed() {

		return $this->db_tools->sql_column_exists( $this->table_prefix . 'users', 'user_verified' );

	}

	/**
	 * This depends on the 3.2.0 migration.
	 */
	static public function depends_on() {

		return [ '\phpbb\db\migration\data\v31x\v314rc1' ];

	}

	/**
	 * Run the 'up' function.
	 */
	public function update_schema() {

		return [
			'add_columns' => [
				$this->table_prefix . 'users' => [
					'user_verified'	=> [
						'UINT', 0
					]
				]
			]
		];

	}

	/**
	 * Run the 'down' function.
	 */
	public function revert_schema() {

		return [
			'drop_columns' => [
				$this->table_prefix . 'users' => [
					'user_verified'
				]
			]
		];

	}

}
