<?php
namespace rubend\authentik\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    protected $template;
    protected $user;
    protected $controller_helper;

    public function __construct(
        \phpbb\template\template $template, 
        \phpbb\user $user, 
        \phpbb\controller\helper $controller_helper
    ) {
        $this->template = $template;
        $this->user = $user;
        $this->controller_helper = $controller_helper;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'core.user_setup'      => 'load_language_on_setup',
            'core.page_header'     => 'add_authentik_button',
        );
    }

    public function load_language_on_setup($event)
    {
        // Hier kunnen we later eventueel taalbestanden laden
    }

    public function add_authentik_button($event)
    {
        // Genereer de route naar onze Authentik controller
        $authentik_login_url = $this->controller_helper->route('rubend_authentik_login');

        $this->template->assign_vars(array(
            'U_AUTHENTIK_LOGIN'       => $authentik_login_url,
            'S_SHOW_AUTHENTIK_BUTTON' => true,
        ));
    }
}