<h1>Edit {{$user[0]->name}} Data</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
@endforeach
@endif
<form action="/userlist" method="POST">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$user[0]->id}}">
    <label for="name">Name</label>
    <br>
    <input type="text" name="name" id="name" value="{{$user[0]->name}}">
    <br>
    <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email" value="{{$user[0]->email}}">
    <br>
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" id="password" value="">
    <br>
    <br>
    <button type="submit">Update</button>
</form>
