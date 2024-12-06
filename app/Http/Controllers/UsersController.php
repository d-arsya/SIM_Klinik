<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rows =$request->input('rows', 10);
        $users = User::orderBy('created_at', 'desc')->paginate($rows);

        return view('masterdata.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masterdata.create_users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password =  bcrypt($request->password);
        $users->role = $request->role;
        $users->save();

        return redirect()->route('masterdata.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('masterdata.edit_users', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password =  bcrypt($request->password);
        $users->role = $request->role;
        $users->save();
        return redirect()->route('masterdata.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('masterdata.users.index');
    }
}
