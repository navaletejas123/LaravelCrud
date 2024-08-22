<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::all();
        // return $users;
        return view('home', compact('users'));
        // return view('crud.show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        user::create([
            "FirstName" => $request->firstName,
            "LastName" => $request->lastName,
            "age" => $request->age,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        $users = user::find($user);
        // return $users;
        return view('ShowSingleUser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = user::find($id);
        return view('EditUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user)
    {
        // return $user;
        user::where('id', $user)->update([
            "FirstName" => $request->firstName,
            "LastName" => $request->lastName,
            "age" => $request->age,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
