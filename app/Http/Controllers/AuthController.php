<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;

class AuthController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo=$userRepo;
    }
    public function loginpage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );
        
         
        
    }

}
