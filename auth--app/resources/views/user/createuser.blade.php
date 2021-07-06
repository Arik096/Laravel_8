<h1>Create user</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
@endforeach
@endif
<form action="/usercreate" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter User Name">
    <br>
    <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email" placeholder="Enter User Email">
    <br>
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" id="password"  placeholder="Enter User Password">
    <br>
    <br>
    <button type="submit">Create</button>
</form>
