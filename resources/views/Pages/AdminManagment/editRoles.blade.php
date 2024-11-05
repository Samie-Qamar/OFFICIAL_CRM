@extends('layout.default')

@section('content')
<div class="container-fluid mt-5 mt-4">
    <div class="card">
        <div class="card-header">
            <h4 style="margin-left: 333px;">Edit Role</h4>
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
                    <option value="web">web</option>
                    
                </select>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection