<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function show($msg, $comment = NULL)
    {
        $random = ['おはよう','こんにちは','こんばんは','おやすみ'];
        $date = [
                'msg' => $msg, 
                'comment' => $comment,
                'greeting' => $random[array_rand($random)],
                ];
        return view('comment.show', $date);
    }
}
