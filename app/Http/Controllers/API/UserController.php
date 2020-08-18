<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return User::all();
    }

    public function show(Request $request, User $user)
    {
        return $user;
    }

    public function store(UserPostRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        return $user;
    }

    public function update(UserPostRequest $request, User $user)
    {
        $data = $request->validated();
        $user->fill($data);
        $user->save();

        return $user;
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return $user;
    }

}
