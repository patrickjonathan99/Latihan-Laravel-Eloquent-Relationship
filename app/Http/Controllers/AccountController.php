<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        $account = Account::latest()->get();
        return view('account', [
            "title" => "Account",
            "accounts" => $account
        ]);
    }
}
