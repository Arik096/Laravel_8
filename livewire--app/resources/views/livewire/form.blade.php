<div>
    <h1>Livewire Form</h1>
    <form action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Name Here!" wire:model.debounce.1000ms = "name">
        <br>
        <label for="sms">Name:</label><br>
        <textarea name="sms" id="sms" placeholder="Enter Sms Here!" wire:model = "sms" cols="30" rows="10"></textarea>
        <br>
        <label for="marriage">Marriage:</label><br>
        <input type="radio" name="single" value="single" wire:model = "marriage">Single
        <input type="radio" name="taken" value="taken" wire:model = "marriage">taken
        <br>
        <label for="color">Color:</label><br>
        <input type="checkbox" name="red" value="red" wire:model = "color">Red
        <input type="checkbox" name="green" value="green" wire:model = "color">Green
        <input type="checkbox" name="blue" value="blue" wire:model = "color">blue
        <br>
        <label for="friuts">Fruits</label><br>
        <select name="friuts" id="friuts" wire:model = "friuts">
            <option value="apple">Apple</option>
            <option value="Mango">Mango</option>
            <option value="berry">Berry</option>
        </select>
        <br>
    </form>

    <hr style="border: 5px">
    <hr>
    Name: {{$name}} <br>
    sms: {{$sms}} <br>
    Marriage: {{$marriage}} <br>
    Color:
    @foreach ($color as $c)
        <li>{{$c}}</li>
    @endforeach
    <br>
    Friuts: {{$friuts}}

</div>
