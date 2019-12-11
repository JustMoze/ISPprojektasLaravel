<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('editUser');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //

    }
    public function updateUser(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->surname = $request->input('surname');
        $user->password = Hash::make($request->input('pass'));
        $user->phoneNumber = $request->input('phoneNumber');
        $user->additionalInfo = $request->input('additionalInfo');
        $user->addres = $request->input('address');
        $user->postCode = $request->input('postCode');
        $user->nationality = $request->input('nationality');
        $user->birthDate = $request->input('birthDate');
        $a9 = $request->input('gender');
        if($a9 == "option1")
        {
          $a9 = 1;
        }
        if($a9 == "option2")
        {
          $a9 = 2;
        }
        if($a9 == "option3")
        {
          $a9 = 3;
        }
        $user->gender = $a9;
        $user->photo = $request->input('photo');
        $user->save();

       return redirect()->route('profile-window');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // detaches all roles from user
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    public function deleteMyself($id)
    {
      $user = User::find($id);
      $user->roles()->detach();
      $user->Rezervacijos()->delete();
      $user->delete();
      Auth::logout();
      return redirect()->view('home');
    }
    public function ShowProfile($id)
    {
      $user= User::where('id',$id)->first();
      return view('/Profile')->with(['user'=>$user]);
    }
}
