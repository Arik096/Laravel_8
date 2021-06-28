<h1>
    User List
</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
    </tr>

        @foreach($information as $info)
        <tr>
        <td>{{ $info['id'] }}</td>
        <td>{{ $info['first_name'] }} {{$info['last_name']}}</td>
        <td>{{ $info['email'] }}</td>
        <td><img src="{{$info['avatar']}}"></td>
        </tr>
        @endforeach
{{-- <h1>{{$headInfo}}</h1> --}}
</table>
