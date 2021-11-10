<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reminder extends Controller
{
public function one() {
    return view('layouts.reminders.one', [
        'foo'=>'Kimani'
    ]);
}
}
