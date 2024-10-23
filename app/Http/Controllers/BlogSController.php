<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogSController extends Controller
{
    public function index() {
        Log::info("=========> INDEX START");
        Log::debug("debug");
        Log::info("info");
        Log::notice("notice");
        Log::warning("warning");
        Log::error("error");
        Log::critical("critical");
        Log::alert("alert");
        Log::emergency("emergency");

        // dd("sample");
        $blogs = [
            ['title' => 'Title one', 'body' => 'This is body 1', 'status' => 1],
            ['title' => 'Title two', 'body' => 'This is body 2', 'status' => 0],
            ['title' => 'Title three', 'body' => 'This is body 3', 'status' => 1],
            ['title' => 'Title four', 'body' => 'This is body 4', 'status' => 0],
            ['title' => 'Title five', 'body' => 'This is body 5', 'status' => 1],
            ['title' => 'Title six', 'body' => 'This is body 6', 'status' => 0],
            ['title' => 'Title seven', 'body' => 'This is body 7', 'status' => 1]
        ];
        Log::info("=========> INDEX END");
        return view('Common/Blogs', compact('blogs'));
    }
}
