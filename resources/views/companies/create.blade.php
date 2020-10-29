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
</body>
</html>
