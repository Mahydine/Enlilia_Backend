<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
   public function index(){
    $books = Articles::all();
    return response()->json($books);
   }

   public function store(Request $request){
    $article = new Articles;

   }
}
