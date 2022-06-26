<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';

    /**
     * @return mixed
     */
    public function init ()
    {
        $router = new Router('http://localhost/php/CMS/');

        $this->di->set($this->serviceName, $router);
    }
}