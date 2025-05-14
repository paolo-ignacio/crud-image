<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function loginForm(){
        return view('login');
    }

    
    public function registrationForm(){
        return view('register');
    }


    public function registration(Request $request){
        $request->validate([
            'fname' => 'required|string',

            'lname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:3|max:16',
            'birthdate' => 'required',
            'image' => 'required'
        ]);
 
    
        $image = $request->file('image');
        $name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $name);

        Register::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthdate' => $request->birthdate,
            'image' => $name
        ]);

        if($request->receipt != null){
            $data = Register::all()->last();

            $age = Carbon::parse($data->birthdate)->age;
            return view('receipt', compact('data', 'age'));
        } else {
            return redirect()->route('login')->with('success', 'Registration successful');
        }
       

    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Register::where('email', $request->email)->first();


        if($user && Hash::check($request->password, $user->password)){
            Auth::loginUsingId($user->id);
            $accounts = Register::all();
            return view('account.index', compact('accounts'));
        }
        return back()->withErrors(['password' =>'Invalid Credentials']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
