<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h2>Companies List</h2>
<button>create new company</button>
<table class="table-responsive-full">

    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Website</th>

    </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
    <tr>
        <td data-label="name">{{ $company->name }}</td>
        <td data-label="email">{{ $company->email }}</td>
        <td data-label="logo">{{ $company->logo }}</td>
        <td data-label="website">{{ $company->website }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
