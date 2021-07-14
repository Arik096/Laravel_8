<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudnetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudnetModal">Create New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="text" class="form-control" wire:model="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dept">Department</label>
                        <input type="dept" name="dept" class="form-control" wire:model="dept">
                        @error('dept')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" wire:model="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" class="form-control" wire:model="phone">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" type="submit" class="btn btn-primary" wire:click.prevent="store()">Add Student</button>
            </div>
        </div>
    </div>
</div>

