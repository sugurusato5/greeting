<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function show($msg, $comment = "")
    {
        $date = ['msg' => $msg, 'comment' => $comment];
        return view('comment.show', $date,);
    }
}
