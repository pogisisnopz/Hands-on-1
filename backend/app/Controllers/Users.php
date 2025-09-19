<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        // Ipapakita niya ang view sa Views/user/landing.php
        return view('user/landing');
    }
}
