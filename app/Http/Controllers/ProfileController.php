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
        return view('profile.profile');
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
           
            $file-> move(public_path(). '/uploads/',Auth::user()->id.$file->getClientOriginalName());
            $newname=Auth::user()->id;
            $newname=$newname.$file->getClientOriginalName();
            $url = URL::to("/") . '/uploads/'.$newname ;

            $profile = User::where('id',Auth::user()->id)->
            update(['name'=>$request->input('name'),'surname'=>$request->input('designation'),'profile_pic'=>$url]);

          }
        
      
       
        return redirect('/home')->with('response','Profile Added Successfully');
        
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

