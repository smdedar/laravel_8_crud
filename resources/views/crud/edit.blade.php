@extends('crud.crud')

@section('title','Edit User')

@section('content')
    <form action=" {{ url('/update/'.$user->id)}}" method="post">
    @csrf
        <input type="text" name="name" value="{{ $user-> name }}" placeholder="name">
        <input type="text" name="email" value="{{ $user-> email }}" placeholder="email">
        <input type="text" name="phone" value="{{ $user-> phone }}" placeholder="phone">
        <input type="submit" value="Update">
    </form>
@endsection
