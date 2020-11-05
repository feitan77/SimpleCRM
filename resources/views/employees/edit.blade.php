@extends('layout')
@section('assets')
    <title>Edit the Employee</title>
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <h1>Edit {{ $employee->firstName }} Employee</h1>
    <form method="POST" action="/employees/{{ $employee->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" value="{{ $employee->firstName }}" value="{{ old('firstName') }}"
               style="
            font-weight: bold;
            display: block;
            margin: 20px 0;
            outline:0;
            border:0;
            padding: 10px 10px;
            font-size: 13px;
            width: 300px;
            border-radius: 4px;
            shadobox-w:inset 0 0 2px rgba(0,0,0,0.5);
            "/>
        @error('firstName')
        <p class="alert">{{ $errors->first('firstName') }}</p>
        @enderror
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" value="{{ $employee->lastName }}" value="{{ old('lastName') }}" style="
            font-weight: bold;
            display: block;
            margin: 20px 0;
            outline:0;
            border:0;
            padding: 10px 10px;
            font-size: 13px;
            width: 300px;
            border-radius: 4px;
            shadobox-w:inset 0 0 2px rgba(0,0,0,0.5);
            "/>
        @error('lastName')
        <p class="alert">{{ $errors->first('lastName') }}</p>
        @enderror
        <label for="email">Email</label>
        <input  type="text" name="email" id="email" value="{{ $employee->email }}" value="{{ old('email') }}" style="
            font-weight: bold;
            display: block;
            margin: 20px 0;
            outline:0;
            border:0;
            padding: 10px 10px;
            font-size: 13px;
            width: 300px;
            border-radius: 4px;
            shadobox-w:inset 0 0 2px rgba(0,0,0,0.5);
            "/>
        @error('email')
        <p class="alert">{{ $errors->first('email') }}</p>
        @enderror
        <label for="phone">Phone</label>
        <input  type="text" name="phone" id="phone" value="{{ $employee->phone }}" value="{{ old('phone') }}"/>
        @error('phone')
        <p class="alert">{{ $errors->first('phone') }}</p>
        @enderror
        <input type="submit" class="button" value="Update"/>
    </form>
@endsection
