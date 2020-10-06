@extends('layouts.app')
@section('content')

<div class="container">
<header>
<h3>Post List</h3>
</header>

<div class="col-12">
    <table class="table table-success">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created User</th>
            </tr>
        <thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->user->name}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection