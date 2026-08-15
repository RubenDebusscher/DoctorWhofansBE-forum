<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\template\template $template
	)
	{
		$this->auth					= $auth;
		$this->config				= $config;
		$this->template = $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.permissions'									=> 'permissions',
			'core.page_header' 									=> 'variable_for_style',
		];
	}

	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions += [
			'u_dsgvo_profile_download'	=> [
				'lang'		=> 'ACL_U_DSGVO_PROFILE_DOWNLOAD',
				'cat'		=> 'profile'
			],
			'u_dsgvo_posts_download'	=> [
				'lang'		=> 'ACL_U_DSGVO_POSTS_DOWNLOAD',
				'cat'		=> 'profile'
			],
		];

		$event['permissions'] = $permissions;
	}

	public function variable_for_style()
	{
		$this->template->assign_vars([
			'DSGVO_PROFILE_DOWNLOAD'		=> $this->auth->acl_get('u_dsgvo_profile_download'),
			'FORMAT_OF_POST'				=> $this->config['dsgvo_post_format'],
			'DSGVO_POSTS_DOWNLOAD'			=> $this->auth->acl_get('u_dsgvo_posts_download'),
		]);
	}
}
