<?php
/**
*
* @package phpBB Extension - Ultimate Points Auto Group
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\upautogroups\conditions\type;

use phpbb\autogroups\conditions\type\base;
use dmzx\ultimatepoints\core\functions_points;

class points extends base
{
	/** @var functions_points */
	protected $functions_points;

	/**
	 * @param functions_points		$functions_points
	 */
	public function set_up_functions(functions_points $functions_points)
	{
		$this->up_functions = $functions_points;
	}

	public function get_condition_type()
	{
		return 'dmzx.upautogroups.type.points';
	}

	public function get_condition_field()
	{
		return 'user_points';
	}

	public function get_condition_type_name()
	{
		return $this->up_functions->get_name();
	}

	public function get_users_for_condition($options = [])
	{
		$options = array_merge([
			'action'		=> '',
			'user_id'		=> 0,
			'user_points'	=> 0.00,
		], $options);

		if ($options['action'] === 'sync')
		{
			$user_data = [];

			$sql = 'SELECT user_id, user_points
					FROM ' . USERS_TABLE . '
					WHERE user_type <> ' . USER_IGNORE;
			$result = $this->db->sql_query($sql);
			while ($row = $this->db->sql_fetchrow($result))
			{
				$user_data[(int) $row['user_id']] = $row;
			}
			$this->db->sql_freeresult($result);

			return $user_data;
		}

		return [$options['user_id'] => [
			'user_id'		=> $options['user_id'],
			'user_points'	=> $options['user_points'],
		]];
	}
}
