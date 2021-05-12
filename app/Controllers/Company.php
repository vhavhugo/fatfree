<?php

namespace Controllers;

class Company
{

    public function beforeroute(\Base $fw)
    {
        if (empty($fw->get('SESSION.is_logget_in'))) {
            $fw->reroute('/logout', false);
        }
    }

    public function afterroute(\Base $fw)
    {

    }

    function get($fw)
    {
        $fw->clear('Session logada');
        echo 'Está no GET';
    }
    function post()
    {
        echo 'É um POST';
    }
    function put()
    {
        echo 'É um PUT';
    }
    function delete()
    {
        echo 'É um DELETE';
    }
}
