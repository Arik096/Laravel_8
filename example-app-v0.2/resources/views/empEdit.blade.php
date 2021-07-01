<h1>Edit Emp</h1>

<form action="/ed" method="POST">
    {{-- {{method_field('PUT')}} --}}
    @csrf
    <input type="hidden" name="id" value="{{$emp->id}}">
    <input type="text" name="name" value="{{$emp->name}}">
    <br>
    <br>
    <input type="text" name="age" value="{{$emp->age}}">
    <br>
    <br>
    <input type="text" name="address" value="{{$emp->address}}">
    <br>
    <br>
    <button type="submit">update</button>
</form>
