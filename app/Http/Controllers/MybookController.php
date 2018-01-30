<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Books;

class ReadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('user');
    }
    public function mybook(Request $request)
    {

       Comments::where('comment_id',$request->input("comment"))->delete();
       return redirect("detail?book=".$request->input("id"));

        
    }
}