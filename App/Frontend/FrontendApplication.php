<?php

namespace App\Frontend;

class FrontendApplication extends FrontendApplication
{
    public function __construct()
    {
        parent::_construct();

        $this->name = "Frontend";
    }

    public function run()
    {
        $controller = $this->getController();
        $controller->execute();

        $this->httResponse->setPage($controller->page());
        $this->httpResponse->send();
    }
}