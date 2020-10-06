<header>Manage User Permissions</header>
<div class="row">
<a href="">Create User Permission</a>
 <table>
    <thead>
        <tr>
            <th>No</th>
            <th>User Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $std)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$std->name}}</td>
            <td>{{$std->email}}</td>
        </tr>
    @endforeach
    </tbody>
 </table>
</div>