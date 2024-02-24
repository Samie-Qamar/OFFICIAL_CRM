@extends('layout.default')
@section('content')

 <div class="container mt-5">


 <form method="post" action="{{route('create.holiday')}}"> 
    @csrf  
 <div class="form-row">
 <div class="form-group col-md-12">
 <label for="inputEmail4">Announcement Title</label>
 <input type="text" name="title" class="form-control"  placeholder="Annoucment Title">
 </div>

 <div class=" form-group col-md-6">
 <label for="inputEmail4">Start Date</label>
 <input type="date" name="start_date" class="form-control"  placeholder="Start Date">
 </div>

 <div class="form-group col-md-6">
 <label for="inputEmail4">End Date</label>
 <input  type="date" name="end_date" class="form-control"  placeholder="End Date">
 </div>

 <div class="form-group col-md-12">
 <label for="inputEmail4">Description</label>
 <textarea type="text" class="form-control"  name="description" placeholder="Enter Description"></textarea>
 </div>

<input type="submit" name="submit" value="submit" class="btn btn-success"/>
</div>
</form>
</div>
@endsection