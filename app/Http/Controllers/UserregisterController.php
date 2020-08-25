<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('manageUser.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('auth.register');
        return view('manageUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'CPF_no'    => 'required',
            'role'    => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->CPF_no = $request->CPF_no;
        $user->role = $request->role;
        $user->save();
        
        return redirect()->route('registration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = User::find($id);
        return view('manageUser.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'CPF_No'    => 'required',
            'role'    => 'required'
        ]);

        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        //$update->password = bcrypt($request->password);
        $update->cpf_no = $request->CPF_No;
        $update->role = $request->role;
        $update->save();
        
        return redirect()->route('registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back()->with('message','User is deleted successfully');
    }
}
