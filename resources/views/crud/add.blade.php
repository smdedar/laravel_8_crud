@extends('crud.crud')

@section('title','Add User')

@section('content')

    <form action="{{ url('/add')}}" method="post">

    @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <input type="submit" value="Save">
    </form>



@endsection
