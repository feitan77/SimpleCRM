@extends('layout')
@section('assets')
    <title>Create New Company</title>
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection
    @section('content')
    <h1>Create New Company</h1>
    <form method="POST" action="/companies" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}"/>
    @error('name')
        <p class="alert">{{ $errors->first('name') }}</p>
    @enderror
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ old('email') }}"/>
    @error('email')
        <p class="alert">{{ $errors->first('email') }}</p>
    @enderror
    <label for="website">Website</label>
    <input type="text" name="website" id="website" value="{{ old('website') }}"/>
    @error('website')
        <p class="alert">{{ $errors->first('website') }}</p>
    @enderror
    <label for="logo">Logo (100x100 min)</label>
    <div class="logo">
        <input type="file" name="logo" id="logo" value="{{ old('logo') }}"/>
        @error('logo')
            <p class="alert">{{ $errors->first('logo') }}</p>
        @enderror
    </div>
    <input type="submit" class="button"/>
    </form>

    @endsection
