<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
class LoginController extends Controller
{
    public function index(){

        return view('back.login');
    }

    public function login(Request $request){

        $validatedData = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
            $email = $request->email;
            $password = $request->password;
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('/home');
            }
            else{
                return view('admin.login');
            }
         
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    
}
