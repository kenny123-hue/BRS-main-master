<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ztsms;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Exception;



class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'phone' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );
        

        

        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user); 
        return redirect('/dashboard');
    }



     public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

               return redirect('/home');

            }else{

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

              'google_id'=> $user->id

                ]);

                Auth::login($newUser);

                return redirect()->back();

            }

        } catch (Exception $e) {

            return redirect('auth/google');

        }

    }

    
/**
* Sending the OTP.
*
* @return Response
*/
public function sendOtp(Request $request){

    $response = array();
    $userId = Auth::user()->id;

    $users = User::where('id', $userId)->first();

    if ( isset($users['phone']) && $users['phone'] =="" ) {
        $response['error'] = 1;
        $response['message'] = 'Invalid mobile number';
        $response['loggedIn'] = 1;
    } else {

        $otp = rand(100000, 999999);
        
        $Ztsms = new Ztsms();

        $ZtsmsResponse = $Ztsms->sendSMS($otp,$users['phone']);

        if($ZtsmsResponse['error']){
            $response['error'] = 1;
            $response['message'] = $ZtsmsResponse['message'];
            $response['loggedIn'] = 1;
        }else{

            Session::put('OTP', $otp);

            $response['error'] = 0;
            $response['message'] = 'Your OTP is created.';
            $response['OTP'] = $otp;
            $response['loggedIn'] = 1;
        }
    }
    echo json_encode($response);
}
public function verifyOtp(Request $request){

    $response = array();

    $enteredOtp = $request->input('otp');
    $userId = Auth::user()->id;  //Getting UserID.

    if($userId == "" || $userId == null){
        $response['error'] = 1;
        $response['message'] = 'You are logged out, Login again.';
        $response['loggedIn'] = 0;
    }else{
        $OTP = $request->session()->get('OTP');
        if($OTP === $enteredOtp){

            // Updating user's status "isVerified" as 1.

            User::where('id', $userId)->update(['verified' => 1]);

            //Removing Session variable
            Session::forget('OTP');

            $response['error'] = 0;
            $response['verified'] = 1;
            $response['loggedIn'] = 1;
            $response['message'] = "Your Number is Verified.";
        }else{
            $response['error'] = 1;
            $response['verified'] = 0;
            $response['loggedIn'] = 1;
            $response['message'] = "OTP does not match.";
        }
    }
    echo json_encode($response);
}
}
