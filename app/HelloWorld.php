<?php

declare(strict_types=1);

namespace app;

use Symfony\Component\HttpFoundation\Request;

class HelloWorld
{

    public function hello()
    {
        $request = Request::createFromGlobals();

        echo $request->query->get('name');
    }

}