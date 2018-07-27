<?php

namespace App\Controllers\Test;

use PG\MSF\Client\Http\Client;
use PG\MSF\Controllers\Controller;

class Test extends Controller
{
    public function actionIndex()
    {
        $this->output("test");

    }
}