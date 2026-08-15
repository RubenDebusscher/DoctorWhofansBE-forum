<?php
/**
*
* @package phpBB Extension - Ultimate Points Auto Group
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\upautogroups;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$ext_manager = $this->container->get('ext.manager');

		if (!$ext_manager->is_enabled('dmzx/ultimatepoints'))
		{
			$user = $this->container->get('user');
			$lang = $user->lang;

			$user->add_lang_ext('dmzx/upautogroups', 'info_ext_ultimatepoints_autogroup');

			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('UP_AUTOGROUPS_REQUIRES_UP');

			$user->lang = $lang;

			return false;
		}

		$md_manager = $ext_manager->create_extension_metadata_manager('dmzx/ultimatepoints');
		$up_version = (string) $md_manager->get_metadata('version');
		$up_required = '1.2.4';

		if (phpbb_version_compare($up_version, $up_required, '<'))
		{
			$user = $this->container->get('user');
			$lang = $user->lang;

			$user->add_lang_ext('dmzx/upautogroups', 'info_ext_ultimatepoints_autogroup');

			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('UP_AUTOGROUPS_REQUIRES_UP_VERSION', $up_required);

			$user->lang = $lang;

			return false;
		}

		if (!$ext_manager->is_enabled('phpbb/autogroups'))
		{
			$user = $this->container->get('user');
			$lang = $user->lang;

			$user->add_lang_ext('dmzx/upautogroups', 'info_ext_ultimatepoints_autogroup');

			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('UP_AUTOGROUPS_REQUIRES_AUTOGROUPS');

			$user->lang = $lang;

			return false;
		}

		return true;
	}

	public function purge_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				try
				{
					$autogroups = $this->container->get('phpbb.autogroups.manager');
					$autogroups->purge_autogroups_type('dmzx.upautogroups.type.points');
				}
				catch (\InvalidArgumentException $e)
				{
					// Continue
				}

				return 'autogroups';
			break;

			default:
				return parent::purge_step($old_state);
			break;
		}
	}
}
