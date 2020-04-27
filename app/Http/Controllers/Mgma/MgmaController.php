<?php

namespace App\Http\Controllers\Mgma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Flash;
use Hash;
use Validator;
use DB;

class MgmaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        return view('/mgma/index');
    }

    public function userList()
    {
        $users = User::all();
        return view('/mgma/alluser', compact('users'));
    }

    public function create()
    {
        return view('/mgma/create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'status' => 'required',
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make($inputs['password']);
        $user->status = json_encode($inputs['status'], true);
        $user->type = request('type');
        $user->created_by = Auth::user()->id;
        $user->save();

        return redirect('/mgma/alluser')->with('success', 'Successfully create');
    }
    public function edit($id)
    {
        $user = User::find($id);

        return view('/mgma/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        dd('hello');
    }
}
