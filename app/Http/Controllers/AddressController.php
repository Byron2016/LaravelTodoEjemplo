<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function index()
    {
        $user = Address::find(1)->user;
        return $user;
    }
}
