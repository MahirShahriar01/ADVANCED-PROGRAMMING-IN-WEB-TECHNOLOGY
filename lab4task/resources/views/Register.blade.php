@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

<html>
<body>
    <h1>REGISTRATION FOR PUBLIC TRANSPORT SERVICE</h1>
    <h2>Managers Information Form</h2>
    <h3>Fill-up your Informations</h3>
    <h3>    </h3>
    <form action="/register" method="post">
        {{csrf_field()}}
       <h4>Your Name  :</h4> <input type="text" name="name"><br>  
        @if($errors->has('name'))
        <b>{{$errors->first('name')}}</b>
        @endif<br><br>

        <h4>Age : </h4> <input type="integer" name="age" ><br> 
        @if($errors->has('age'))
        <b>{{$errors->first('age')}}</b>
        @endif<br><br>

        <h4>NID Number  :</h4> <input type="integer" name="nid"><br>  
        @if($errors->has('nid'))
        <b>{{$errors->first('nid')}}</b>
        @endif<br><br>

        <h4>Phone Number : </h4> <input type="text" name="mobile"><br>
        @if($errors->has('mobile'))
        <b>{{$errors->first('mobile')}}</b>
        @endif<br><br>

        <h4>Mail Address :</h4> <input type="mail" name="email"><br>
        @if($errors->has('email'))
        <b>{{$errors->first('email')}}</b>
        @endif<br><br>

        <h4>Address :</h4> <br> <textarea id="review" name="address" rows="5" cols="40"></textarea><br>
        @if($errors->has('address'))
        <b>{{$errors->first('address')}}</b>
        @endif<br><br>

        
        
    <input type="submit" value="Register">
    
    </form>
</body>
</html>