@extends('crud.crud')

@section('title','All Users')


@section('content')
    <h3> All Users </h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user -> id }}</td>
                    <td>{{ $user -> name }}</td>
                    <td>{{ $user -> email }}</td>
                    <td>{{ $user -> phone }}</td>
                    <td>
                        <a href="{{url('/delete/'.$user -> id)}}">Delete</a>
                        <a href="{{url('/edit/'.$user -> id)}}">Edit</a>
                    </td>
                </tr>
            @endforeach

        </thead>
    </table>

<a href="{{ url('/add')}}">Add User</a>
@endsection
