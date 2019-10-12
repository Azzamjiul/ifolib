<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }
}
