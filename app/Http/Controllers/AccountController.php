<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function mypage()
    {
        $user = User::with('m_member_ranks')->find(Auth::user()->id);

        // dd($user->m_member_ranks->rank_name);
        return view('accounts.mypage',compact('user'));
    }
}
