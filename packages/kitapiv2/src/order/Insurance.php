<?php

namespace Webadvance\Kitapiv2\Order;

use Webadvance\Kitapiv2\FunctionClass;

class Insurance extends FunctionClass
{
    protected $uri = 'order/insurance/get-list';

    public function cargo_type()
    {
        return $this->response->cargo_type;
    }

    public function agent()
    {
        return $this->response->agent;
    }
}