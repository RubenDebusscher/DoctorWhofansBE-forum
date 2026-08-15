<?php

/*
* @package phpBB Extension - Simple View Topic Post Profile Alternator
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\svtppa\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ucp_listener implements EventSubscriberInterface
{
	protected $request;
	protected $template;
	protected $user;

	public function __construct(\phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.ucp_prefs_view_data'			=> 'ucp_prefs_get_data',
			'core.ucp_prefs_view_update_data'	=> 'ucp_prefs_set_data',
		);
	}

	public function ucp_prefs_get_data($event)
	{
		{
			$this->user->add_lang_ext('forumflair/svtppa', 'ucp');
		}

		$event['data'] = array_merge($event['data'], array(
			'svtppa_alt'	=> $this->request->variable('svtppa_alt', (int) $this->user->data['user_svtppa_alt']),
		));

		if (!$event['submit'])
		{
			$this->template->assign_vars(array(
				'S_USER_SVTPPA_ALT'		=> $event['data']['svtppa_alt'],
			));
		}
	}

	public function ucp_prefs_set_data($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], array(
			'user_svtppa_alt'	=> $event['data']['svtppa_alt'],
		));
	}
}
