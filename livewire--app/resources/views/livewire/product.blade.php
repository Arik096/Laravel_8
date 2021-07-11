<div>
    {{-- Be like water. --}}
    <h1>hey you are working</h1>




    <input type="text" name="title" id="tilte" wire:model="title">
    <br>
    <input type="text" name="name" id="name" wire:model="name">
    <br>


    <h3>Title: {{$title}}</h3>
    <h3>Name: {{$name}}</h3>

    <h3>Lifecycle Hooks Working Live</h3>
    @foreach ($info as $life_hook)
    <li>
        {{$life_hook}}
    </li>
    @endforeach

</div>
