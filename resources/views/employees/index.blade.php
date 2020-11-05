@extends('layout')
@section('assets')
    <title>Employees</title>
    <link href="/css/table.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <h2>Employees List</h2>
    <a href="/employees/create"><button>create new employee</button></a>
    <a href="/companies"><button class="back">back to companies</button></a>
    <table class="table-responsive-full">

        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Company</th>
            <th class="last-column" ></th>

        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td data-label="First Name">{{ $employee->firstName }}</td>
                <td data-label="Last Name">{{ $employee->lastName }}</td>
                <td data-label="Email">{{ $employee->email }}</td>
                <td data-label="phone">{{ $employee->phone }}</td>
                <td data-label="Company">{{ $employee->company->name }}</td>
                <td class="last-column">
                    <a class="edit" href="{{ route('employees.edit', $employee) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="trash" href="{{ route('employees.delete',[$employee->id]) }}" onclick="return confirm('Are you sure you want to delete this employee?');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
