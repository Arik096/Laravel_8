<h1>User View</h1>

@if ($errors->any())
@foreach ($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="user" method="POST" autocomplete="on">
    @csrf
    <input type="text" name="username" id="username" placeholder="username">
    <br>
    <span style="color: red">@error('username')
        {{$message}}
    @enderror</span>
    <br>
    <input type="password" name="password", id="password" placeholder="password">
    <br>
    <span style="color: red">@error('password')
        {{$message}}
    @enderror</span>
    <br>
    <button type="submit"> Submit</button>
</form>
