<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class Helpers {
    
    static function getUserIdBySession() 
    {
        return Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    }
    
    static function formatName($firstName = '', $lastName = '') 
    {
        return ucfirst($firstName) .' '. ucfirst($lastName);
    }
}