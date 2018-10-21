<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Response;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
        $cars  = User::all();
        return response()->json($cars);
    }


    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return response()->json(User::create($request->all()));
    }

    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id){
    {
        $user  = User::find($id);
        $user->make = $request->input('make');
        $user->model = $request->input('model');
        $user->year = $request->input('year');
        $user->save();
 
        return response()->json($user);
    }

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id){
        $user  = User::find($id);
        $user->delete();
        return response()->json('Removed successfully.');
    }

}
