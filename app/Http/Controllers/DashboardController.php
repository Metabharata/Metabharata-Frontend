<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Story;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = User::join('stories','stories.user_id','=','users.id')->get();
        return view('dashboard.dashboard', compact('data'));
    }

    public function edit($id)
    {
        $story = Story::join('users','users.id','=','stories.user_id')
                        ->where('stories.user_id','=', $id)->first();
        return view('dashboard.update_story', compact('story'));
    }

    public function update(Request $request, $id)
    {
        $edits = [
            "name" => $request->name,
            "email" => $request->email,
            "updated_at" => Carbon::now()
        ];
        $updates = User::where('id', '=', $id)
                    ->update($edits);
        $edit = [
            "level_6" => $request->level_6,
            "level_7" => $request->level_7,
            "updated_at" => Carbon::now()
        ];
        $update = Story::where('user_id', '=', $id)
                    ->update($edit);
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        Story::where('user_id',$id)->delete();
        return redirect()->route('dashboard');
    }
}
