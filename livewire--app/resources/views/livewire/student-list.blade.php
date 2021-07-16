{{-- {{ $students }} --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        List of Students
                        <button class="btn btn-success">
                            Create New Student
                        </button>
                    </h1>
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
                                    <th scope="row">{{$student->id}}</th>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->dept}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <button class="btn btn-info">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
