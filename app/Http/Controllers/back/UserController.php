<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Roles;
use Hash;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $roles = new Roles();
        $role_data = $roles->get_features_access(2);
        print_r($role_data[0]->feature_names);
     $data['users'] = User::all();
    return view('back\user.index', $data);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        return view('back\user.create');
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'mobnum' => 'required|min:10',
            'photo' =>  'required|image|mimes:jpeg,png,pdf,gif'
        ]);
        if($request->hasFile('photo')){
            $profileimage = $request->photo->getClientOriginalname();
            $path = $request->photo->move(public_path('/Images/profile'),$profileimage);
            $photo_profile=URL::asset('/Images/profile').'/'.$profileimage;
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->photo =  $photo_profile ;
        $user->mobnum = $request->mobnum;
        $user->password = Hash::make($request->password);
        $user->uid =  rand(100000, 99999);
        $user->is_email_verify=1;
        $user->is_phone_verify=1;
        $user->save();
        return redirect()->route('user.index')
        ->with('success','User has been created successfully.');
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show($id, Request $request)
    {
    
    } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $user = User::findOrFail($id);   
        return view('back\user.edit', compact('user'));
    }

    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request,$id)
    {    
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
            'mobnum' =>'required'
        ]);
       
        $user = User::findOrFail($id); 
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Images/profile'), $filename);
            $profile_photo= URL::asset('/Images/profile').'/'.$filename;
            $user->photo =  $profile_photo;
        }
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->mobnum =$request->mobnum;
        $user->save();
        return redirect()->route('user.index')
        ->with('success','User Has Been updated successfully');   

    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    $users = User::destroy($id);    
    return redirect()->route('user.index')
    ->with('success','user has been deleted successfully');
    }

}
