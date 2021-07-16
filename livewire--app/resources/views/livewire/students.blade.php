<div>
    @include('livewire.createStudent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('sms'))
                        <div class="alert alert-success">{{ session('sms') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Students
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addStudnetModal">
                                    Add New Student <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                        <path
                                            d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                    </svg>
                                </button>
                            </h3>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->dept }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{$users->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
