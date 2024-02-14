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
<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Leave Type</label>
      <select type="text" class="form-control" id="inputEmail4" placeholder="Email">
        <option>Casual(0/2)</option>
        <option>Sick(0/2)</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Start Date</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">End Date</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  
  <div class="form-group col-md-12">
    <label for="inputAddress">leave Reason</label>
    <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
  </div>
   
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection