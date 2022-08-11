<?php

namespace App\Controllers\User;//1

use App\Controllers\BaseController;//2

class Manage extends BaseController
{
    public function index()
    {
        echo "ini dari halaman manage user";
        // return view('welcome_message');
    }

}
