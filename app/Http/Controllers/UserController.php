<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(25);
        return view('user.user', ['users' => $users]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($user->email != $request->email) {
            $request->validate([
                'email' => 'unique:users,email',
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if(isset($request->password)) {
            $user->update([
                'password' => $request->password,
            ]);
        }

        return redirect()->route('user.index')->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
