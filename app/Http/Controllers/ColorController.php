<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{

    public function index()
    {
        return view('layout');
    }
    public function getRandomColor()
    {
        $random_color = Color::where('type', '=', 0)->orderBy(DB::raw('RAND()'))->take(1)->first();
        return view('random', ['image' => $random_color]);

    }
}
