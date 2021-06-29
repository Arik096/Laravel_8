<h1>add members</h1>
@if (session('user'))
<h3 style="color: green">{{session('user')}} user has been added</h3>
@endif
<form action="added" method="POST">
    @csrf
    <input type="text" name="user">
    <br>
    <input type="password" name="password">
    <br>
    <input type="email" name="email">
    <br>
    <button type="submit">create</button>
</form>
