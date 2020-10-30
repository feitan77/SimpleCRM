@extends('layout')
@section('assets')
    <title>Edit the company</title>
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
<h1>Edit {{ $company->name }} company</h1>
<form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $company->name }}" value="{{ old('name') }}"/>
    @error('name')
        <p class="alert">{{ $errors->first('name') }}</p>
    @enderror
    <label for="email">Email</label>
    <input  type="text" name="email" id="email" value="{{ $company->email }}" value="{{ old('email') }}"/>
    @error('email')
        <p class="alert">{{ $errors->first('email') }}</p>
    @enderror
    <label for="website">Website</label>
    <input type="text" name="website" id="website" value="{{ $company->website }}" value="{{ old('website') }}"/>
    @error('website')
        <p class="alert">{{ $errors->first('website') }}</p>
    @enderror
    <label for="logo">Logo (100x100 min)</label>
    <div class="logo">
        <input type="file" name="logo" id="logo" value="{{ old('logo') }}"/>
    </div>
    @if($company->logo!==null)
        <img src="{{ asset('storage/' . $company->logo) }}" alt="logo" title="logo"/>
    @endif
    @error('logo')
        <p class="alert">{{ $errors->first('logo') }}</p>
    @enderror
    <input type="submit" class="button" value="Update"/>
</form>
@endsection
