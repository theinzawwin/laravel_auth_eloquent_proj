@extends('layouts.app')
@section('content')

<div class="container">
<header>
<h3>Create Post</h3>
</header>
<form action="{{route('posts.store')}}" method="post">
@csrf
<div class="col-12">
<div class="form-group">
<label>Post Name:</label>
<input type="text" name="name" class="form-control" />

</div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="from-control" ></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-primary" value="Save" />
        <input type="reset" class="btn btn-sm btn-warning" value="Reset" />
    </div>
</div>
</form>
</div>
@endsection