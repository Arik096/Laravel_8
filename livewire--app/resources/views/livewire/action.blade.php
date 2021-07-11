<div>
    <button class="btn btn-info" wire:click="takeAction()">Click to Increase</button>
    <button class="btn btn-info" wire:click="makeSum(12,13)">Click to Sum</button>
    <h6>Number: {{$sum}}</h6>
    <h6>Sum: {{$sum_of_two}}</h6>

    {{-- <textarea wire:keydown.enter="displaySMS($event.targret.value)"></textarea> --}}
    <input type="text" name="" id="" wire:keydown.enter="displaySMS()" wire:model="live_sms">
    <p> SMS: {{$sms}}</p>

    <form wire:submit.prevent="getSum()">
        <input type="number" name="n1" wire:model="n1">
        <input type="number" name="n2" wire:model="n2">
        <button type="submit">Add</button>
    </form>
    <h2>Add: {{$get_sum}}</h2>
</div>
