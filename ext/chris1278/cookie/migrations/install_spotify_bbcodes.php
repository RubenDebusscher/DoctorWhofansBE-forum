<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace chris1278\cookie\migrations;

class install_spotify_bbcodes extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\install_vimeo_bbcodes'];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'installspotifybbcodes']]],
		];
	}

	public function revert_data()
	{
		return [
			['custom', [[&$this, 're_install_spotify_bbcodes']]],
		];
	}

	public function installspotifybbcodes($bbcode_data)
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
			'spotify_bbcode=' => [
				'bbcode_match'			=> '[spotify]https://open.spotify.com/{IDENTIFIER1}/{TEXT1}?{TEXT2}[/spotify]',
				'bbcode_tpl'			=> '<!-- IF SPOTIFY_BBCODE_SWITCH --><div class="sp_video_layer"><span class="sp_span"><iframe allow="encrypted-media" allowfullscreen="" loading="lazy" scrolling="no" data-src="https://open.spotify.com/embed/{IDENTIFIER1}/{TEXT1}" data-name="spotify" style="border:0;height:100%;left:0;position:absolute;width:100%"></iframe></span></div><!-- ELSE --><div class="sp_video_switch_false">{L_SPOTIFY_ADMIN}</div><!-- ENDIF -->',
				'bbcode_helpline'		=> 'SPOTIFY_VIDEOLINK_HELP',
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

	public function re_install_spotify_bbcodes($bbcode_data)
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
			'spotify_bbcode=' => [
				'bbcode_match'			=> '[spotify]https://open.spotify.com/{IDENTIFIER1}/{TEXT1}?{TEXT2}[/spotify]',
				'bbcode_tpl'			=> '<span data-s9e-mediaembed="spotify" style="display:inline-block;width:100%;max-width:320px"><span style="display:block;overflow:hidden;position:relative;padding-bottom:125%;padding-bottom:calc(100% + 80px)"><iframe allow="encrypted-media" allowfullscreen="" loading="lazy" scrolling="no" src="https://open.spotify.com/embed/{IDENTIFIER1}/{TEXT1}" style="border:0;height:100%;left:0;position:absolute;width:100%"></iframe></span>',
				'bbcode_helpline'		=> '[spotify]Videolink[/spotify] - For the videos or Playlist from spotify.com',
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
