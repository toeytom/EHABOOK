<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
        $user_id = Auth::user()->id;
        $profile = DB::table('users')
                    ->select('*')
                    ->where(['id' => $user_id])
                    ->first();
        return view('profile.profile',['profile'=>$profile]);
    }
    public function index()
    {
      
        $user_id = Auth::user()->id;
        $profile = DB::table('users')
                    ->select('*')
                    ->where(['id' => $user_id])
                    ->first();
    
        return view('showprofile',['profile'=>$profile]);
    }
    public function addProfile(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'profile_pic' => 'required'
        ]);
       
       
        if(Input::hasFile('profile_pic')){
            $file = Input::file('profile_pic');
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";  

            $size = strlen( $chars );
            $str='';
            echo "Random string =";
     
            for( $i = 0; $i < 100; $i++ ) {
     
                   $str=$str.$chars[ rand( 0, $size - 1 ) ];
            } 
            $file-> move(public_path(). '/uploads/',$str.$file->getClientOriginalName());
          
            $url = URL::to("/") . '/uploads/'.$str.$file->getClientOriginalName();

            $profile = User::where('id',Auth::user()->id)->
            update(['name'=>$request->input('name'),'surname'=>$request->input('designation'),'profile_pic'=>$url]);

          }
        
      
       
        return redirect('/home')->with('response','Profile Change Successfully');
        
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

