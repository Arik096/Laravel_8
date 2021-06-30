<h1>add emp</h1>

<form action="/addemp" method="POST">
    @csrf
    <input type="text" name="name" id="name">
    <br>
    <input type="text" name="age" id="age">
    <br>
    <input type="text" name="address" id="address">
    <br>
    <input type="text" name="col1" id="col1">
    <br>
    <input type="text" name="col2" id="col2">
    <br>
    <input type="text" name="col3" id="col3">
    <br>
    <input type="text" name="col4" id="col4">
    <br>
    <input type="text" name="col5" id="col5">
    <br>
    <input type="text" name="col6" id="col6">
    <br>
    <button type="submit">add</button>
</form>
