<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\story;

class StoriesControllers extends Controller
{
    
    
    public function index() {
        $stories = story::where('user_id',auth()->user()->id)
        ->orderBy('id', 'DESC')
        ->paginate(3);
            return view('Stories.index', [
            'stories' => $stories
        ]);
    }
}
