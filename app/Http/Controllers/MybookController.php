<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use App\Books;
use App\Bills;
use Auth;


class MybookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mybook(Request $request)
    {
        $books=Bills::where('user_id',Auth::user()->id)->get();
        foreach($books as $book)
        {
            $book->book=DB::table('books')->where('book_id',$book->book_id)->first();
        }
        return view('mybook',compact( 'books'));

    //    Comments::where('comment_id',$request->input("comment"))->delete();
    //    return redirect("detail?book=".$request->input("id"));
       

    //    $book_id = $request->input('book');
    //    $book_name = Books::where(['book_id' => $book_id])
    //                ->first();
       
    //    $comments =Comments::where(['book_id' => $book_id])->get();


    


    //    foreach($comments as $comment) {
    //        $comment->user = DB::table('users')->find($comment->user_id);
    //    }



    //    return view('bookDetail',compact('book_name', 'comments'));
        
    }
}