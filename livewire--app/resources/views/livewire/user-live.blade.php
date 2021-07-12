<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Users</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
