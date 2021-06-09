<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Notifications\NewUser;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'cin'       => 'required|numeric|min:8',
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'role_name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Password::min(8)
        //             ->mixedCase()
        //             ->letters()
        //             ->numbers()
        //             ->symbols()
        //             ->uncompromised(),
        //     'password_confirmation' => 'required',
        //     ],
        // ]);

        User::create([
            'cin'      => $request->cin,
            'name'      => $request->name,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'role_name' => $request->role_name,
            'password'  => Hash::make($request->password),
        ]);
        Toastr::success('Nouveau compte créé avec succès :)','Succès');
        return redirect('login');
    }
    protected function create(array $data)
{
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    $admin = User::where('admin', 1)->first();
    if ($admin) {
        $admin->notify(new NewUser($user));
    }

    return $user;
}

}
