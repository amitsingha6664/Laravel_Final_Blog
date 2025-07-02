<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function Login(){
        return view('Auth.Login');
    }

    public function User_Login(Request $request){
        $request->validate([
        'Phone_Number' => 'required|email|unique:users',
        'Password' => 'required|string|min:6|max:20|confirmed',
    ]);
    }

    public function Registration(){
        return view('Auth.Registration');
    }

    public function New_User_Create(Request $request){

        // return $request->all();
        // Step 1: Validate input
        $validator = Validator::make($request->all(),
            [
                'Full_Name'     => 'required|string|min:4|max:50',
                'Email'         => 'required|email|unique:users,email',
                'Phone_Number'  => 'required|digits:11',
                'Password'      => 'required|string|min:6|max:20|confirmed',
            ],
            [
                // Full_Name errors
                'Full_Name.required' => 'Please enter your full name.',
                'Full_Name.string'   => 'Name must be a valid string.',
                'Full_Name.min'      => 'Name must be at least 4 characters.',
                'Full_Name.max'      => 'Name must not exceed 50 characters.',

                // Email errors
                'Email.required'     => 'Email address is required.',
                'Email.email'        => 'Please enter a valid email address.',
                'Email.unique'       => 'This email address is already registered.',

                // Phone_Number errors
                'Phone_Number.required' => 'Phone number is required.',
                'Phone_Number.digits'   => 'Phone number must be exactly 11 digits.',

                // Password errors
                'Password.required'     => 'Password is required.',
                'Password.string'       => 'Password must be a valid string.',
                'Password.min'          => 'Password must be at least 6 characters.',
                'Password.max'          => 'Password must be 20 characters under.',
                'Password.confirmed'    => 'Password confirmation does not match.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $User_Data = new User();
        $User_Data->name = $request->Full_Name;
        $User_Data->email = $request->Email;
        $User_Data->phone_number = $request->Phone_Number;
        $User_Data->password = Hash::make($request->Password);

        if($User_Data->save()){
            return redirect()->back()
                            ->with('success', 'Your Registration Successfully!');
        }
        else{
            return redirect()->back()
                            ->with('error', 'Your Registration Unsuccessfully!');
        }
    }

    }
