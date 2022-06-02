<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function register(Request $data){
        // dd($data);
        $user =  User::create([
            'name' => $data['fullname'],
            'email' => $data['email'],
            'department_id' => $data['department'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(60),
        ]);
        // dd($user);
        return response()
            ->json(['user' => $user]);
    }

    public function users(){
        $users = User::get();
        return response()
            ->json(['user' => $users]);
    }

    public function login(Request $data){

        $user = User::where('email', $data['email'])->first();
        if($user){
            $match =  Hash::check(
                $user->password,
                Hash::make($data['password'])
            );
            if($match){
                return response()
            ->json(['user' => $user]);
            }
        }else return "User not found";

    }

    public function getDepartments(){
        //get all departments
        $departments = Department::get();

        return response()->json(['departments' => $departments]);
    }
    public function getLoggedInUser(){
        //get all departments
        $user = User::where('email', $data['email'])->first();
        return response()->json(['user' => $user]);
    }
}
