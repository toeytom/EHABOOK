<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Auth;
use App\User;
use App\Users;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;
class StripeController extends HomeController
{
    
    public function __construct()
    {
        parent::__construct();
        $this->user = new User;
    }
    
    /**
     * Show the application paywith stripe.
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithStripe()
    {
        return view('paywithstripe');
    }
    public function addcard()
    {
        return view('addcard');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithStripe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            'amount' => 'required',
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
                    \Session::put('error','The Stripe Token was not generated correctly');
                    return redirect()->route('stripform');
                }
            
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'THB',
                    'amount'   => $request->get('amount'),
                    'description' => 'Add in wallet',
                ]);
                if($charge['status'] == 'succeeded') {
                    /**
                    * Write Here Your Database insert logic.
                    */
                    \Session::put('success','Money add successfully in wallet');
                    return redirect()->route('stripform');
                } else {
                    \Session::put('error','Money not add in wallet!!');
                    return redirect()->route('stripform');
                }
            } catch (Exception $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('stripform');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('stripform');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('stripform');
            }
        }
        \Session::put('error','All fields are required!!');
        return redirect()->route('stripform');
    }    
    public function addcreditcard(Request $request)
    {echo"dasd";
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

                    return redirect()->route('changepass');
                }
            
                
            } catch (Exception $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('changepass');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('changepass');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('changepass');
            }
        }
        \Session::put('error','All fields are required!!');
        return redirect()->route('changepass');
    }    
}