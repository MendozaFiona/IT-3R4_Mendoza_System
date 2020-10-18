<?php

namespace App\Http\Controllers;
use App\Models\Main;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request){
        $this->request = $request;
        //
    }

    public function login(){
        return view('page.login');
    }

    public function message(){
        return 'success'; //matters if successful or not
    }

}
