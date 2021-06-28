<h1>User Login</h1>


<form action="userloged" method="POST">
{{-- <form action="userloged" method="GET"> --}}
    {{method_field('DELETE')}}
    {{-- {{method_field('PUT')}} --}}
    @csrf
    <input type="text" name="user" placeholder="enter name">
    <br>
    <input type="password" name="password" placeholder="enter pass">
    <br>
    <button type="submit">
        login
    </button>
</form>
