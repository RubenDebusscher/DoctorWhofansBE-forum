<?php
/**
*
* @package phpBB Extension - Ultimate Points Auto Group
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\upautogroups\event;

use phpbb\autogroups\conditions\manager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var manager */
	protected $autogroup_manager;

	/**
	 * Constructor
	 *
	 * @param	manager		$autogroup_manager
	 *
	 */
	public function __construct(manager $autogroup_manager = null)
	{
		$this->autogroup_manager = $autogroup_manager;
	}

	static public function getSubscribedEvents()
	{
		return ['dmzx.ultimatepoints.add_points' => 'check_points'];
	}

	public function check_points(\phpbb\event\data $event)
	{
		if ($this->autogroup_manager !== null)
		{
			$this->autogroup_manager->check_condition('dmzx.upautogroups.type.points', [
				'user_id'		=> $event['user_id'],
				'user_points'	=> $event['points'],
			]);
		}
	}
}
