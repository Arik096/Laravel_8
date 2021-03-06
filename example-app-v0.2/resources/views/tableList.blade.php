<h1>emp list</h1>
@if ($sms = Session::get('status'))
<h6>{{$sms}}</h6>
@endif
<button><a href="/addemp">Create</a></button>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>col1</th>
        <th>col2</th>
        <th>col3</th>
        <th>col4</th>
        <th>col5</th>
        <th>col6</th>
        <th>Actions</th>
    </tr>
    @foreach ($emps as $emp)
    <tr>
        <td>{{$emp->id}}</td>
        <td>{{$emp->name}}</td>
        <td>{{$emp->age}}</td>
        <td>{{$emp->address}}</td>
        <td>{{$emp->col1}}</td>
        <td>{{$emp->col2}}</td>
        <td>{{$emp->col3}}</td>
        <td>{{$emp->col4}}</td>
        <td>{{$emp->col5}}</td>
        <td>{{$emp->col6}}</td>
        <td>
            <a href="/del/{{$emp->id}}">Delete</a>
            |
            <a href="/ed/{{$emp->id}}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
<span>
    {{$emps->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
