<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace chris1278\cookie\migrations;

class update_youtube_bbcode extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\update_database'];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'install_youtube_bbcode']]],
		];
	}

	public function revert_data()
	{
		return [
			['custom', [[$this, 're_install_youtube_bbcode']]],
		];
	}

	public function install_youtube_bbcode($bbcode_data)
	{
		// Load the acp_bbcode class
		if (!class_exists('acp_bbcodes'))
		{
			include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
		}

		$bbcode_tool = new \acp_bbcodes();

		/**
		* @var array An array of bbcodes data to install
		*/
		$bbcode_data = [
			'youtube_be_bbcode=' => [
				'bbcode_match'			=> '[youtube]https://{IDENTIFIER2}.youtube.com/watch?v={IDENTIFIER}[/youtube]',
				'bbcode_tpl'			=> '<!-- IF YOUTUBE_BBCODE_SWITCH --><div class="yt_video_layer"><iframe data-src="https://{IDENTIFIER2}.youtube-nocookie.com/embed/{IDENTIFIER} "data-name="youtube"?rel=0&showinfo=0&autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><!-- ELSE --><div class="yt_video_switch_false">{L_YOUTUBE_ADMIN}</div><!-- ELSE --><div class="yt_video_switch_false">{L_YOUTUBE_ADMIN}</div><!-- ENDIF -->',
				'bbcode_helpline'		=> 'YTCOM_VIDEOLINK_HELP',
				'display_on_posting'	=> 1,
			],
		];

		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
			// Build the BBCodes
			$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl']);

			$bbcode_array += [
				'bbcode_tag'			=> $data['bbcode_tag'],
				'first_pass_match'		=> $data['first_pass_match'],
				'first_pass_replace'	=> $data['first_pass_replace'],
				'second_pass_match'		=> $data['second_pass_match'],
				'second_pass_replace'	=> $data['second_pass_replace']
			];

			$sql = 'SELECT bbcode_id
					FROM ' . BBCODES_TABLE . "
					WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
					OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
			$result = $this->db->sql_query($sql);
			$row_exists = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row_exists)
			{
				// Update existing BBCode
				$bbcode_id = $row_exists['bbcode_id'];

				$sql = 'UPDATE ' . BBCODES_TABLE . '
						SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
						WHERE bbcode_id = ' . (int) $bbcode_id;
				$this->db->sql_query($sql);
			}
			else
			{
				// Create new BBCode
				$sql = 'SELECT MAX(bbcode_id) AS max_bbcode_id
						FROM ' . BBCODES_TABLE;
				$result = $this->db->sql_query($sql);
				$max_bbcode_id = $this->db->sql_fetchfield('max_bbcode_id');
				$this->db->sql_freeresult($result);

				if ($max_bbcode_id)
				{
					$bbcode_id = $max_bbcode_id + 1;

					// Make sure it is greater than the core BBCode ids...
					if ($bbcode_id <= NUM_CORE_BBCODES)
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}
				}
				else
				{
					$bbcode_id = NUM_CORE_BBCODES + 1;
				}

				if ($bbcode_id <= BBCODE_LIMIT)
				{
					$bbcode_array['bbcode_id'] = (int) $bbcode_id;
					$bbcode_array['display_on_posting'] = ((int) $bbcode_array['display_on_posting']);
					$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
				}
			}
		}
	}

	public function re_install_youtube_bbcode($bbcode_data)
	{
		// Load the acp_bbcode class
		if (!class_exists('acp_bbcodes'))
		{
			include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
		}

		$bbcode_tool = new \acp_bbcodes();

		/**
		* @var array An array of bbcodes data to install
		*/
		$bbcode_data = [
			'youtube_be_bbcode=' => [
				'bbcode_match'			=> '[youtube]https://{IDENTIFIER2}.youtube.com/watch?v={IDENTIFIER}[/youtube]',
				'bbcode_tpl'			=> '<div><iframe style="max-width:100%;width:590px; height: 500px;margin-top:3px;height: 350px;" src="https://{IDENTIFIER2}.youtube-nocookie.com/embed/{IDENTIFIER}"?rel=0&showinfo=0&autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>',
				'bbcode_helpline'		=> '[youtube]Videolink[/youtube] - For the videos with normal Youtube.com links',
				'display_on_posting'	=> 1,
			],
		];

		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
			// Build the BBCodes
			$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl']);

			$bbcode_array += [
				'bbcode_tag'			=> $data['bbcode_tag'],
				'first_pass_match'		=> $data['first_pass_match'],
				'first_pass_replace'	=> $data['first_pass_replace'],
				'second_pass_match'		=> $data['second_pass_match'],
				'second_pass_replace'	=> $data['second_pass_replace']
			];

			$sql = 'SELECT bbcode_id
					FROM ' . BBCODES_TABLE . "
					WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
					OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
			$result = $this->db->sql_query($sql);
			$row_exists = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row_exists)
			{
				// Update existing BBCode
				$bbcode_id = $row_exists['bbcode_id'];

				$sql = 'UPDATE ' . BBCODES_TABLE . '
						SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
						WHERE bbcode_id = ' . (int) $bbcode_id;
				$this->db->sql_query($sql);
			}
			else
			{
				// Create new BBCode
				$sql = 'SELECT MAX(bbcode_id) AS max_bbcode_id
						FROM ' . BBCODES_TABLE;
				$result = $this->db->sql_query($sql);
				$max_bbcode_id = $this->db->sql_fetchfield('max_bbcode_id');
				$this->db->sql_freeresult($result);

				if ($max_bbcode_id)
				{
					$bbcode_id = $max_bbcode_id + 1;

					// Make sure it is greater than the core BBCode ids...
					if ($bbcode_id <= NUM_CORE_BBCODES)
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}
				}
				else
				{
					$bbcode_id = NUM_CORE_BBCODES + 1;
				}

				if ($bbcode_id <= BBCODE_LIMIT)
				{
					$bbcode_array['bbcode_id'] = (int) $bbcode_id;
					$bbcode_array['display_on_posting'] = ((int) $bbcode_array['display_on_posting']);
					$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
				}
			}
		}
	}
}
