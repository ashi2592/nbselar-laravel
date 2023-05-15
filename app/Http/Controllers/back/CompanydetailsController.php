<?php
namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Company;
use Illuminate\Support\Facades\URL;


class CompanydetailsController extends Controller
{
    //
    public function index(){

        $company = company::all()->first();
        return view('back.company.index',compact('company'));
    }

    public function store(Request $request,$id){

        $this->validate($request,[
            'company_title'    => 'string|required',
            'company_description'   => 'string|required',
            'status'        =>  'required'
        ]);
        $company = Company::findOrFail($id);
        $company->company_title    = $request->company_title;
        $company->company_description  =trim(preg_replace('/\s\s+/', ' ', $request->company_description));
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Images/company'), $filename);
            $company->photo=URL::asset('/Images/company').'/'.$filename;
        }
        $company->status  = $request->status;
        $company->save();
        if($company){
            request()->session()->flash('success','Company Information successfully Updated');
        }
        else{
             request()->session()->flash('error','Error while creating Company !!!');
       }
       return redirect()->route('company.index');

    }
}
