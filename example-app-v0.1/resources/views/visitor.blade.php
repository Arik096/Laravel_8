<h1>Visitor View</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif
<form action="visitorReq" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
    <br>
    <input type="text" name="mobile" placeholder="mobile" value="{{old('mobile')}}">
    <br>
    <input type="text" name="email" placeholder="email" value="{{old('email')}}">
    <br>
    <button type="submit">Request</button>
</form>
