<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Repository\AnneeScolaireRepository;
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

    public function login(Request $request,AnneeScolaireRepository $anneeRepo)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );

        $array_request=$request->only('email','password');

        if(Auth::attempt($array_request))
        {
           $annee=$anneeRepo->getActif();
           session(['annee'=>$annee[0]->libelle]);
           session(['annee_id'=>$annee[0]->id]);
           
           return to_route('dashboard');
        }

        return to_route('loginpage')->with('failed','Permission Failed !!');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->regenerateToken();
        return to_route('loginpage');
    }

}
