<?php
namespace rubend\authentik\controller;

class main_controller
{
    protected $helper;
    protected $user;
    protected $db;
    protected $config;

    public function __construct(
        \phpbb\controller\helper $helper, 
        \phpbb\user $user,
        \phpbb\db\driver\driver_interface $db,
        \phpbb\config\config $config
    ) {
        $this->helper = $helper;
        $this->user = $user;
        $this->db = $db;
        $this->config = $config;
    }

    public function login()
    {
        $auth_url = 'https://auth.doctorwhofans.be/application/o/authorize/';
        $clientId = '4tqCTxojPYyB9IZpTCYZxiwsvS9XgBjyxXKiz4K3'; 
        $redirectUri = generate_board_url() . '/app.php/authentik/callback';
        
        $params = array(
            'response_type' => 'code',
            'client_id'     => $clientId,
            'redirect_uri'  => $redirectUri,
            'scope'         => 'openid email profile',
            'state'         => generate_storage_hash(),
        );

        redirect($auth_url . '?' . http_build_query($params));
    }

    public function callback()
    {
        $code = request_var('code', '');
        $state = request_var('state', '');

        if (empty($code)) {
            trigger_error('Authenticatie mislukt: Geen code ontvangen van Authentik.', E_USER_WARNING);
        }

        $clientId = '4tqCTxojPYyB9IZpTCYZxiwsvS9XgBjyxXKiz4K3';
        $clientSecret = 'N4fAVtaAntdTBTM97RuiPMzZuKJMUUs5OhvE3PSxHfqoKn2wacMW3R5KtuoXzLdCW0uf73ConXFUaVbEpKBvb6kApXbSmY6QHUKlnjgCkl4Qda3sHfRgtvUtA4TxxbFc'; // <-- Vul hier het geheime secret in dat je in Authentik hebt gekopieerd
        $redirectUri = generate_board_url() . '/app.php/authentik/callback';
        $tokenUrl = 'https://auth.doctorwhofans.be/application/o/token/';

        // Stap 1: Wissel de authorization code in voor een Access Token via cURL
        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
            'grant_type'    => 'authorization_code',
            'code'          => $code,
            'redirect_uri'  => $redirectUri,
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
        )));
        // Voeg een timeout toe van 10 seconden zodat cURL niet oneindig blijft hangen (voorkomt 502)
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            trigger_error('cURL fout bij ophalen token: ' . htmlspecialchars($curlError), E_USER_ERROR);
        }

        $tokenData = json_decode($response, true);

        if (!isset($tokenData['access_token'])) {
            $errorMsg = isset($tokenData['error_description']) ? $tokenData['error_description'] : 'Onbekende fout';
            trigger_error('Kon geen Access Token ophalen bij Authentik: ' . htmlspecialchars($errorMsg), E_USER_ERROR);
        }

        // Stap 2: Haal de gebruikersinfo op via het UserInfo endpoint
        $userInfoUrl = 'https://auth.doctorwhofans.be/application/o/userinfo/';
        $ch = curl_init($userInfoUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $tokenData['access_token']
        ));
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $userResponse = curl_exec($ch);
        curl_close($ch);
        $userInfo = json_decode($userResponse, true);

        if (!isset($userInfo['email'])) {
            trigger_error('Geen e-mailadres ontvangen van Authentik.', E_USER_ERROR);
        }

        $email = $userInfo['email'];
        $username = isset($userInfo['preferred_username']) ? $userInfo['preferred_username'] : explode('@', $email)[0];

        // Tijdelijke melding om te verifiëren dat de OIDC handshake volledig slaagt
        trigger_error('Authentik OIDC succesvol doorloopt! Ingelogd e-mailadres: ' . htmlspecialchars($email), E_USER_NOTICE);
    }

    public function provision()
    {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Provision endpoint actief']);
        exit;
    }
}