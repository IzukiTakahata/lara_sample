<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 自分のプロフィールを取得
        $profile = UserProfile::where('user_id', '=', Auth::id())->first();

        return view('user_profile.index')->with([
            'profile' => $profile,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user_profile.create')->with([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $profile = new UserProfile;
        $profile->user_id = Auth::id();
        $profile->age = $request->input('age');
        $profile->address = $request->input('address');
        $profile->save();
        return redirect(route('user_profile.index'));
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
        //
        $profile = UserProfile::find($id);
        return view('user_profile.create')->with([
            'profile' => $profile
        ]);
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
        //
        $profile = UserProfile::find($id);
        // $profile->user_id = Auth::id();
        $profile->age = $request->input('age');
        $profile->address = $request->input('address');
        $profile->save();
        return redirect(route('user_profile.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $profile = UserProfile::find($id);
        if(!empty($profile)){
            $profile->delete();
        }
        return redirect(route('user_profile.index'));
    }
}
