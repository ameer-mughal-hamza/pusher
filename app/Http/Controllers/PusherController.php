<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function event(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        event(new TaskEvent($request->input('title'), $request->input('content')));
        return view('pusher');
    }
}
