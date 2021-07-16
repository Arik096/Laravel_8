<div class="container">
    <div class="row" style="display: grid; place-items:center;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>
                        Create a new Student
                    </h1>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="id" wire:model="stdID" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name" required>
                            @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dept" class="form-label">Department</label>
                            <input type="text" class="form-control" id="dept" wire:model="dept" required>
                            @error('dept')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="eamil" wire:model="email" required>
                            @error('email')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" wire:model="phone" required>
                            @error('phone')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" wire:model="password" required>
                            @error('password')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div> --}}
                        <button type="submit" class="btn btn-primary" wire:click="update()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
