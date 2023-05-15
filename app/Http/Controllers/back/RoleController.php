<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){

        $data['role'] = Role::all();
        return view('role.index',$data);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request){

        return view('role.create');
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
        'name' => 'required'
        ]);
        $role = new Role;
        $role->name = $request->name;
        $role->status = 1;
        $role->save();
        return redirect()->route('role.index')
        ->with('success','Role has been created successfully.');
    
    }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $roles = Role::findOrFail($id);    
        return view('role.edit', compact('roles',$roles));
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
    'name' => 'required'
    ]);

    $roles = Role::findOrFail($id);
    $roles->name = $request->name;
    $roles->status = $request->status;
    $roles->save();
    return redirect()->route('role.index')
    ->with('success','Role Has Been updated successfully');   
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
      $roles = Role::findOrFail($id);    
      return view('role.show',compact('roles',$roles));
       
    } 

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){

        $roles = Role::destroy($id);    
        return redirect()->route('role.index')
        ->with('success','Role has been deleted successfully');
    }
}
