<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function show($msg, $comment = NULL)
    {
        $random = ['おはよう','こんにちは','こんばんは','おやすみ'];
        $rand_msg= $random[array_rand($random)];

        switch ($msg){
            case 'morning';
            $greeting = '朝のあいさつ';
            $greeting1 = 'おはようございます';
        break;
            case 'afternoon';
            $greeting = '昼のあいさつ';
            $greeting1 = 'こんにちは';
        break;
            case 'evening';
            $greeting = '夕方のあいさつ';
            $greeting1 = 'こんばんは';
        break;
            case 'night';
            $greeting = '夜のあいさつ';
            $greeting1 = 'こんばんは';
        break;
            case 'night';
            $greeting = '夜のあいさつ';
            $greeting1 = 'こんばんは';
        break;
            case 'freeword';
            $greeting = '自由なメッセージ';
            $greeting1 =  $comment;
        break;
            case 'random';
                $greeting = 'ランダムなメッセージ';
                $greeting1 = $rand_msg;
        break;
        }

        
        return view('comment.show', ['greeting' => $greeting, 'greeting1' => $greeting1]);
    }
}
