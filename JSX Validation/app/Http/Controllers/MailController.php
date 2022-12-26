<?php
//php artisan make:controller MailController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller
{
    function index()
    {
        //dd("helloph");
     return view('mail');
    }

    function send(Request $request)
    {
        $admin="easygo@gmail.com";

        $this->validate($request,
        ['name'=>'required', 
        'email' => 'email|required',
        'message' =>  'required']
        );
        if(isset($error))
        {
    return $output;
        }
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

     Mail::to($admin)->send(new SendMail($data));
     return '<script type=\'text/javascript\'>alert("Thanks for contacting us .."); window.location="/customerprofile"</script>';

    }
    
}