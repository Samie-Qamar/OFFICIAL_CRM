@extends('layout.default')

@section('content')
<div class="container-fluid mt-5 mt-4">
    <div class="card">
        <div class="card-header">
            <h4 style="margin-left: 333px;">Create New Role</h4>
        </div>
    </div>
</div>

<div class="page-container mt-5">
    <form method="post" action="{{ route('Store.Roles') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Role Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Role Type</label>
                <select class="form-control" id="inputEmail4" name="guard_name" required>
                    <option value="Super-Admin">Super-Admin</option>
                    <option value="HR-Management">HR-Management</option>
                    <option value="User-Management">User-Management</option>
                    <option value="Sub-Admin">Sub-Admin</option>
                </select>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Existing Roles</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Role Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <!-- Action buttons (Edit/Delete) can be added here -->
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <form action="" method="POST" style="display:inline;">
                                    
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
