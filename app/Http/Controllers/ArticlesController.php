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

   public function test(Request $request){
    return response()->json(["test" => "test"]);
   }
}
