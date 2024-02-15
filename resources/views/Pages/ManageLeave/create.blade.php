@extends('layout.default')
@section('content')





<div class="container mt-4">
<div class="card">
  <div class="card-header" style="background-color:white;">
    <a href="" class="btn btn-primary">Manage Leaves</a>
  </div>
</div>
</div>

<div class="container mt-5">
<form method="post" action="{{route('create.leave')}}">
  @csrf
  <div class="form-row">


  <div class="form-group col-md-6">
      <label for="inputPassword4">Title</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Title" name="title">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Leave Type</label>
      <select type="text" class="form-control" id="inputEmail4" placeholder="Select Type" name="type">
        <option value="cascual">Casual(0/2)</option>
        <option value="sick">Sick(0/2)</option>
        <option value="emergency">Emergency(0/2)</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Start Date</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Enter Start Date" name="start_date">
    </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">End Date</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Enter End Date" name="end_date">
    </div>
  
  <div class="form-group col-md-12">
    <label for="inputAddress">leave Reason</label>
    <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="remarks"></textarea>
  </div>
   
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection