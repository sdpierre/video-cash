<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users/index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function videos()
    {
        $json = file_get_contents('https://videocash.herokuapp.com/videos');
        $videos = json_decode($json,true);
        return view('videos/index')->with(['videos' => $videos]);
    }

    public function postvideos()
    {
        $json = file_get_contents('https://videocash.herokuapp.com/videos');
        $videos = json_decode($json,true);
        return view('videos/create')->with(['videos' => $videos]);
    }

    public function sendvideos()
    {
        $json = file_get_contents('https://videocash.herokuapp.com/videos');
        $videos = json_decode($json,true);
        return view('videos')->with(['videos' => $videos]);
    }
}
