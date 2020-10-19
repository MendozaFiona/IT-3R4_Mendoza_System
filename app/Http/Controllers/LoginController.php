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

    public function result(){

        $username = $_GET["uname"];
        $password = $_GET["psw"];

        $result = Main::all();
        $match = false;

        if(empty($result)){
            return "Empty!";
        }

        foreach($result as $r){
            $user = $r->username;

            if($user == $username){
                $pass = $r->password;

                if($pass == $password){
                    $match = true;
                    return "You are logged in";
                    break;
                }// if pass
                
            }// if user

        }// foreach

        if($match == false){
            return "Incorrect Credentials!";
        }
    }

}
