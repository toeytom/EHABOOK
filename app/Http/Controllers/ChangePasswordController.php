<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class ChangePasswordController extends Controller
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

    public function index()
    {
        return view('changepass');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        $pass=[];
        array_push($pass, $request->input('password'));
        array_push($pass, $request->input('password_confirmation'));

        $user=Users::where('email',$request->input('password'))->get(); 
        $page='changepass';
        session()->flash('status', 'error');
        return view($page,['user'=>$pass]);
    }
    public function addcreditcard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
        
        ]);

        $input = $request->all();
        if ($validator->passes()) {           
            $input = array_except($input,array('_token'));            
            $stripe = Stripe::make('sk_test_HtS63Cm0bwJzzFcMBHl5yD0i');
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number'    => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year'  => $request->get('ccExpiryYear'),
                        'cvc'       => $request->get('cvvNumber'),

                    ],
                ]);
                if (!isset($token['id'])) {
                    Session::put('error','The Stripe Token was not generated correctly');
                    return redirect()->route('addcard');
                }
                else
                {
                    $card = Users::where('id',Auth::user()->id)->update([
                        
                        'user_card_name' => $request->get('name'),
                        'user_card_id'=> $request->get('card_no'),
                        'user_card_cvv'=>$request->get('cvvNumber'),
                        'user_card_exp_month'=>$request->get('ccExpiryMonth'),
                        'user_card_exp_year'=>$request->get('ccExpiryYear'),
                      
                       
                        

                    ]);

                    return redirect()->route('addcard');
                }
            
                
            } catch (Exception $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addcard');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addcard');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addcard');
            }
        }
        \Session::put('error','All fields are required!!');
        return redirect()->route('addcard');
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
