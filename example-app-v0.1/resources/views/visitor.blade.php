<h1>Visitor View</h1>

<form action="visitorReq" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="mobile" placeholder="mobile">
    <br>
    <input type="text" name="email" placeholder="email">
    <br>
    <button type="submit">Request</button>
</form>
