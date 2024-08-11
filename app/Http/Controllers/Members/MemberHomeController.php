<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberHomeController extends Controller
{
    public function home()
    {
        return view('members.home');
    }
}
