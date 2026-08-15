<?php

/*
* @package phpBB Extension - Simple View Topic Post Profile Alternator
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\svtppa\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	protected $template;
	protected $user;

	public function __construct(\phpbb\template\template $template, \phpbb\user $user)
	{
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'		=> 'main',
			'core.user_setup'		=> 'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'		=> 'forumflair/svtppa',
			'lang_set'		=> 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function main($event)
	{
		$this->template->assign_vars(array(
			'S_USER_SVTPPA_ALT'	=> $this->user->data['user_svtppa_alt'],
		));
	}
}
