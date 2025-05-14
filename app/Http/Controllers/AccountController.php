<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Register;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        //
        $accounts = Register::all();
        return View('account.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
            
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
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $account = Register::findOrFail($id);

        return View('account.edit', compact('account'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'birthdate' => 'required',
            'image' => 'required'
        ]);

        $acc = Register::findOrFail($id);

        $acc->update([
            'fname' => $request->fname,
            'lname' =>  $request->lname,
            'birthdate' =>  $request->birthdate,
            'image' =>  $request->image
        ]);


        $accounts = Register::all();
        return View('account.index', compact('accounts'))->with('session', 'Edit successful');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($account)
    {
        //
        $acc = Register::findOrFail($account);
        $acc->delete();
        $accounts = Register::all();
        return view('account.index', compact('accounts'))->with
        ('success', 'Delete success');
    }

    
}
