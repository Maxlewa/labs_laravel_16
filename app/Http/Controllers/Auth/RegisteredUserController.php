<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeSender;
use App\Models\Genre;
use App\Models\Job;
use App\Models\Logo;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $logo = Logo::find(1);
        $genres = Genre::all();
        $jobs = Job::all();
        return view('auth.register', compact('logo', 'genres', 'jobs'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            "age" => ["required"],
            // "photo" => ["required"],
            // "description" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required"],
            "genre_id" => ["required"],
            // "role_id" => ["required"],
            "job_id" => ["required"],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'firstname' => $request->firstname,
        //     'email' => $request->email,
        //     "age" => $request->age,

        //     "description" => $request->description,
        //     // "password" => ["required"],
        //     "genre_id" => $request->genre_id,
        //     // "role_id" => ["required"],
        //     "job_id" => $request->job_id,
        //     'password' => Hash::make($request->password),
        // ]);

        $user = new User();

        // $request->file('photo')->storePublicly('img/', 'public');
        // $user->photo = $request->file('photo')->hashName();

        $user->photo = "default.png";

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        // $user->description = $request->description;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $user->genre_id = $request->genre_id;
        $user->role_id = 4;
        $user->job_id = $request->job_id;
        $user->save();

        event(new Registered($user));

        Mail::to($request->email)->send(new WelcomeSender($request));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
