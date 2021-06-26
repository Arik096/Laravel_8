<h1>User View</h1>


<form action="user" method="POST">
    @csrf
    <input type="text" name="username" id="username" placeholder="username">
    <br>
    <input type="password" name="password", id="password" placeholder="password">
    <br>
    <button type="submit"> Submit</button>
</form>
