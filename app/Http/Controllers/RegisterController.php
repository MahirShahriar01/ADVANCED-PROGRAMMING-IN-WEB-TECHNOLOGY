<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function getRegister(Request $request){
        $this->validate($request,
        
        [
        'name'=>'required|string|min:3',
        'age'=>'required|integer|min:22|max:60',
        'nid'=>'required|integer|min:10|max:24',
        'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11|string',
        'email'=> 'required|regex:/^\\S+@\\S+\\.\\S+$/',
        'address'=>'required|min:5|max:60|string',
        
        ],
        [
            'required'=>'Please fill up Your Information',
            'string'=>'Invalid Value',
            'integer'=>'Numerical Value Only',
            

        ]
        );      
        $output=$request->name;
        $output.=$request->age;
        $output.=$request->nid;
        $output.=$request->mobile;
        $output.=$request->email;
        $output.=$request->address;
        
        return $output;;
}
       

}