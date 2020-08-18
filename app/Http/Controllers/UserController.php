<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\User;


class UserController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(Request $request, User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserPostRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        return redirect()->route('users.index')->with('status', 'User created!');
    }

    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserPostRequest $request, User $user)
    {
        $data = $request->validated();
        $user->fill($data);
        $user->save();
        return redirect()->route('users.index')->with('status', 'User updated!');
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('status', 'User destroyed!');
    }
}
