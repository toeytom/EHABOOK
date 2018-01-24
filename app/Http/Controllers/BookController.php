<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\Books;
use Auth;

class BookController extends Controller
{
    public function addbook(){
        return view('addbook');
    }
    public function index()
    {
      
   
    }
    public function addbooks(array $data){
       
       
       
        
            $file = Input::file('book');
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";  

            $size = strlen( $chars );
            $str='';
            echo "Random string =";
     
            for( $i = 0; $i < 100; $i++ ) {
     
                   $str=$str.$chars[ rand( 0, $size - 1 ) ];
            } 
            $file-> move(public_path(). '/pdf/',$str.$file->getClientOriginalName());
          
            $urlbook = URL::to("/") . '/pdf/'.$str.$file->getClientOriginalName();

            $file = Input::file('demobook');
            $size = strlen( $chars );
            $str='';
            echo "Random string =";
     
            for( $i = 0; $i < 100; $i++ ) {
     
                   $str=$str.$chars[ rand( 0, $size - 1 ) ];
            } 
            $file-> move(public_path(). '/demo/',$str.$file->getClientOriginalName());
            $urldemo = URL::to("/") . '/demo/'.$str.$file->getClientOriginalName();

            $file = Input::file('pic');
            $size = strlen( $chars );
            $str='';
            echo "Random string =";
     
            for( $i = 0; $i < 100; $i++ ) {
     
                   $str=$str.$chars[ rand( 0, $size - 1 ) ];
            } 
            $file-> move(public_path(). '/picbook/',$str.$file->getClientOriginalName());
            $urlpic = URL::to("/") . '/picbook/'.$str.$file->getClientOriginalName();


            Books::create([
                'book_name' => $data['name'],
                'book_category'=>$data['category'],
                'book_demo'=>$urldemo,
                'book_cover' => $urlpic,
                'book_price' => $data['price'],
                'book_page_per_book' => $data['page'],
                'book_size'=>$data['size'],
                'book_score'=>0,
                'book_description'=>$data['detail'],
                'book_address'=>$data['urlbook'],
                ]);

          
        
      
       
        return redirect('/addbook')->with('response','Add  Book Successfully');
        
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
 
        
        
        
    }

