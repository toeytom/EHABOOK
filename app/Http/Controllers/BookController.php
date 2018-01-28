<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Books;
use App\Comments;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Auth;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $book_id = $request->input('book');
        $book_name = Books::where(['book_id' => $book_id])
                    ->first();
        
        $comments =Comments::where(['book_id' => $book_id])->get();


     


        foreach($comments as $comment) {
            $comment->user = DB::table('users')->find($comment->user_id);
        }



        return view('bookDetail',compact('book_name', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addcomment(Request $request)
    {

       Comments::create([
           'user_id'=> Auth::user()->id,
           'comment_taxt'=>$request->input("comment"),
           'book_id' => $request->input("id"),
       ]);
       return redirect("detail?book=".$request->input("id"));

        
    }
    public function dcomment(Request $request)
    {

       Comments::where('comment_id',$request->input("comment"))->delete();
       return redirect("detail?book=".$request->input("id"));

        
    }
    public function ecomment(Request $request)
    {

       Comments::where('comment_id',$request->input("comment"))->update(['comment_taxt'=>$request->input("commentt")]);
       return redirect("detail?book=".$request->input("id"));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}  





        
        
        
        
        
        
        
        
        /*
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'profile_pic'=>'required'
        ]);
        return $request->input('name');



        $profile->profile_pic = $request->input('profile_pic');
        
        return Auth::user();
        exit();
*/
        
            



        


        //$request->input('designation');

        /*

        
        
        
        */
 
        
        
        
    


