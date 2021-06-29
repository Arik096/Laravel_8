<h1>login form</h1>

<form action="logged" method="POST">
    @csrf
    <input type="text" name="username" id="username">
    <br>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Login</button>
</form>
