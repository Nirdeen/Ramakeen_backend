<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes\User;







class LoginController extends Controller
{
    public function show () {
        return view('auth.login');
    }

    public function login (Request $request) {
        //dd(bcrypt('12345678'));
        //dd($request->only('email', 'password'));
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Auth login
        if (!Auth::attempt($request->only('email', 'password','id'))) {
            return back()->with('error', 'Invalid Credentials!');
        }

        // Redirect to home page
        return User::redirectTo();
            
    }
   
    public function logout() {
        Auth::logout(); // logout user
        return redirect(\URL::previous());

}
public function update(Request $request, user $user)
    {
        $user->update([
        "name"=>$request["name"],
        "email"=>$request["email"],
        "id"=>$request["user_id"],
        
        
        
        ]);
        return redirect(route("user.show",["user"=>$user]));
    }

}
