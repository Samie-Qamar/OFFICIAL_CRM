@extends('layout.default')
@section('content')
<div class="container-fluid mt-5 mt-4">
    <div class="card">
        {{-- Header Code --}}
    </div>
</div>

<div class="page-container mt-5">
    <form method="post" action="{{ route('create.leave') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Title</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Title" name="title">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Leave Type</label>
                <select class="form-control" id="inputEmail4" name="type">
                    <option value="cascual">Casual (0/2)</option>
                    <option value="sick">Sick (0/2)</option>
                    <option value="emergency">Emergency (0/2)</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Start Date</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">End Date</label>
                <input type="date" class="form-control" name="end_date">
            </div>
            <div class="form-group col-md-12">
                <label for="inputAddress">Leave Reason</label>
                <textarea class="form-control" id="inputAddress" placeholder="Enter reason" name="remarks"></textarea>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection