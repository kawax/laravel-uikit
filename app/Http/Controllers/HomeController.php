<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $data = range(0, 1000);
        $forPage = array_slice($data, request()->page * 10);

        $items = new LengthAwarePaginator($forPage, 1000, 10, request()->page, ['path' => '/home']);

        $simples = new Paginator($forPage, 10, request()->page, ['path' => '/home']);

        return view('home')->with(compact('items', 'simples'));
    }
}
