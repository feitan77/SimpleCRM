<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="/css/table.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Companies List</h2>
<a href="/companies/create"><button>create new company</button></a>
<table class="table-responsive-full">

    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Website</th>
        <th class="last-column" ></th>

    </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td data-label="name">{{ $company->name }}</td>
            <td data-label="email">{{ $company->email }}</td>
            <td data-label="logo">{{ $company->logo }}</td>
            <td data-label="website">{{ $company->website }}</td>
            <td class="last-column">
                    <a class="edit" href="/companies/{{ $company->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="trash" href="{{ route('companies.delete',[$company->id]) }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
