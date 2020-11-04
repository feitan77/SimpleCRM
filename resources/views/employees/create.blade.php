@extends('layout')
@section('assets')
    <title>Create New Employee</title>
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
    <h1>Create New Employee</h1>
    <form method="POST" action="/employees" enctype="multipart/form-data">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" value="{{ old('firstName') }}"
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
        <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}"
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
        @error('lastName')
        <p class="alert">{{ $errors->first('lastName') }}</p>
        @enderror
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" style="
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
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" style="
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
        @error('phone')
        <p class="alert">{{ $errors->first('phone') }}</p>
        @enderror
        <input type="submit" class="button"/>
    </form>

@endsection
