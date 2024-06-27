<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ApiArticleController extends Controller
{
    public function articles()
    {
        return   Article::all();
        
      
    }

    public function detail($id)
    {
        return Article::find($id);
    }
}
