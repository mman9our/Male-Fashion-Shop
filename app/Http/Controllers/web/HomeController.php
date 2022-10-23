<?php

namespace App\Http\Controllers\web;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
        public function index()
    {
        $categories = Categorie::select('id','name')->where('active','1')->get();
        return view('web.index', compact('categories'));
    }

}
