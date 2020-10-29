<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
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
</body>
</html>
