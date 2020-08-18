<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\CampusPostRequest;
use App\Http\Controllers\Controller;
use App\Campus;

class CampusController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Campus::all();
    }

    public function show(Request $request, Campus $campus)
    {
        return $campus;
    }

    public function store(CampusPostRequest $request)
    {
        $data = $request->validated();
        $campus = Campus::create($data);
        return $campus;
    }

    public function update(CampusPostRequest $request, Campus $campus)
    {
        $data = $request->validated();
        $campus->fill($data);
        $campus->save();

        return $campus;
    }

    public function destroy(Request $request, Campus $campus)
    {
        $campus->delete();
        return $campus;
    }

}
