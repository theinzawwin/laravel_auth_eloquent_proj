<div class="row">
<h2>Give Permission for User</h2>
<form action="{{route('permission.store')}}" method='post'> 
@csrf
<div class="form-group">
 <label>User Name</label>
 <select class="form-control" name="user_id">
    @foreach($users as $user)
    <option value='{{$user->id}}'>{{$user->name}}</option>
    @endforeach
 </select>
</div>
<div>
    <label>Given Permission</label>
    <br>
    <div>
        @foreach($permissions as $per)
          <input type="checkbox" name='given_permission[]' value="{{$per->id}}"> {{$per->name}}<br>
        @endforeach
    </div>
</div>
<div>
    <input type="submit" value="Save" /><input type="reset" value="Reset" />
</div>
</form>
</div> 