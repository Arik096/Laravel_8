<h1>User List</h1>

@if (Session::has('create'))
{{Session::get('create')}}
@endif
@if (Session::has('update'))
{{Session::get('update')}}
@endif
@if (Session::has('delete'))
{{Session::get('delete')}}
@endif
<br>
<button>
    <a href="/usercreate">Create User</a>
</button>
<table border="5" style="padding: 5px; margin: 5px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <button>
                <a href="/userupdate/{{$user->id}}">Edit</a>
                |
                <a href="/userdelete/{{$user->id}}">Delete</a>
            </button>
        </td>
    </tr>
    @endforeach
</table>
