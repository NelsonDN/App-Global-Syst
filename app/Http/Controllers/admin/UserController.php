<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'avatar' => ['required', 'image', 'mimes:jpg,png,svg,gif'],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->role
        ]);

        if (isset($request->avatar)){
            $filename_chemin= 'usersAvatar/'.$user->id.'.'.$request->avatar->getClientOriginalExtension();
            
            $filename= $user->id.'.'.$request->avatar->getClientOriginalExtension();
    
            $user->avatar = $filename_chemin;
            $user->save();
    
            $request->file('avatar')->storeAs('usersAvatar', $filename, 'public');    

        }


        return redirect()->route('users.index')->with('success', "L'utilisateur $user->name a bien été enregistré :) ");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', "unique:users,email,$user->id"],
            'password' => ['required', 'confirmed', 'min:6'],
            'avatar' => ['image', 'mimes:jpg,png,svg,gif', 'max:2048'],
            'active' => ['required'],
            'role' => ['required']
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => $request->active,
            'is_admin' => $request->role
        ]);

        if(isset($request->avatar)){
            $avatar = $user->avatar;
            $ok = Storage::disk('public')->exists($avatar);

            if ($ok){
                Storage::disk('public')->delete($avatar);
            }
            $filename_chemin= 'usersAvatar/'.$user->id.'.'.$request->avatar->getClientOriginalExtension();
            
            $filename= $user->id.'.'.$request->avatar->getClientOriginalExtension();
    
            $user->avatar = $filename_chemin;
            $user->save();
    
            $request->file('avatar')->storeAs('usersAvatar', $filename, 'public');

        }

        return redirect()->route('users.index')->with('success', "L'utilisateur $user->name a bien ete modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', "L'utilisateur a bien ete supprime");
    }
}
