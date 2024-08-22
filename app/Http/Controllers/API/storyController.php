<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class storyController extends Controller
{
    public function getStoryLock(){
        try {
            $user = Auth::user();
            $story = Story::where('user_id','=', $user->id)->first();

            $response = $story;
    
            return ResponseFormatter::success($response,'Get Story Success');
        } catch (Exception $e) {
            $response = [
                'errors' => $e->getMessage(),
            ];
            return ResponseFormatter::error($response, 'Something went wrong', 500);
        }
    }
}
