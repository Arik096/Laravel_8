<h1>User List</h1>


<table border="5" style="padding: 5px">
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
        <td>{{$user->emial}}</td>
        <td>
            <button>
                <a href="">Edit</a>
                |
                <a href="">Delete</a>
            </button>
        </td>
    </tr>
    @endforeach
</table>
