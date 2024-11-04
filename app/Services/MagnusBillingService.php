<?php

namespace App\Services;

require_once __DIR__ . '/../../vendor/autoload.php';

use magnusbilling\api\magnusBilling;
use magnusbilling\api\Exception;

class MagnusBillingService
{
    protected $magnusBilling;

    public function __construct()
    {
        // Initialize the API with your key and secret, and public URL
        $this->magnusBilling = new MagnusBilling(env('MBILLING_API_KEY'), env('MBILLING_API_SECRET'));
        $this->magnusBilling->public_url = env('MBILLING_API_ENDPOINT');
    }

    public function getAccount($page = 1) {
        return $this->magnusBilling->read('user', $page);
    }

    public function getModules() {
        return $this->magnusBilling->read('module');
    }

    public function getFields() {
        return $this->magnusBilling->getFields('user');
    }

    public function getGroups() {
        return $this->magnusBilling->read('usergroup');
    }



    // Used functions
    public function createAccount($data) {
        return $this->magnusBilling->create('user', $data);
    }

    public function getPhoneAccount($username) {
        $this->magnusBilling->setFilter('username', $username, 'eq', 'string');
        $result = $this->magnusBilling->read('user');
        $result = $result['rows'][0];
        return $result;

    }

    public function getCreditByUsername($username) {
        $result = $this->getPhoneAccount($username);
        $result = $result['credit'];
        return $result;
    }

}