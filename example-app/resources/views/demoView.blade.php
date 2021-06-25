<h1>demo view page</h1>
{{-- {{$names}} --}}

{{-- @if($names=="arik")
<h3>hi arik</h3>
@else
<h3>unknown user</h3>
@endif --}}


{{-- @for($i=0;$i<10;$i=$i+2)
<h6>
    {{$i}}
    <br>
</h6>
@endfor --}}

{{-- @php
    dd($names);
@endphp --}}


@foreach ($names as $name)
{{$name}} <br>
@endforeach

