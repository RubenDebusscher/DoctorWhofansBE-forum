<?php
namespace rubend\authentik\auth\provider;

class authentik extends \phpbb\auth\provider\base
{
    protected $config;
    protected $request;
    protected $user;
    protected $db;

    public function __construct(\phpbb\config\config $config, \phpbb\request\request $request, \phpbb\user $user, \phpbb\db\driver\driver_interface $db)
    {
        this->config = $config;
        this->request = $request;
        this->user = $user;
        this->db = $db;
    }

    /**
     * Login method
     */
    public function login($username, $password)
    {
        // Hier komt straks de logica voor de inlogcontrole of doorverwijzing naar Authentik.
        // Als een gebruiker via de callback binnenkomt, mappen we dat hier of via de controller.
        
        return array(
            'status'    => LOGIN_ERROR_EXTERNAL_AUTH,
            'error_msg' => 'LOGOUT_FAILED', // Placeholder, vullen we straks verder in
            'user_row'  => array('user_id' => ANONYMOUS),
        );
    }
}