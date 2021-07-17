{{-- {{ $students }} --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        List of Students
                        <a href="{{ route('stdcreate') }}">
                            <button class="btn btn-success">
                                Create New Student
                            </button>
                        </a>
                    </h1>
                    @if (Session()->has('sms'))
                        <div class="alert alert-success">{{ Session('sms') }}</div>
                    @endif
                </div>
                <div class="card-header">
                    <div class="col-md-4">
                        <div>
                            <input type="text" id="sBox" wire:model="sBox" class="form-control" placeholder="Search name, email, dept or phone">
                        </div>
                        {{ $sBox }}
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->dept }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>
                                        <a href="{{ route('stdupdate', ['id' => $student->id]) }}">
                                            <button class="btn btn-info">
                                                Edit
                                            </button></a>
                                        <button class="btn btn-danger" wire:click="delete({{ $student->id }})">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
    <style>
    svg {
        max-width: 50px;
    }

    p {
        padding-top: 10px;
    }

</style>
</div>
