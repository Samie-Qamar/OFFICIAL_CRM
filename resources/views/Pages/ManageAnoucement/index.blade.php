@extends('layout.default')
@section('content')

 <div class="container mt-5">
 <form>   
 <div class="form-row">
 <div class="form-group col-md-12">
 <label for="inputEmail4">Announcement Title</label>
 <input type="text" class="form-control"  placeholder="Annoucment Title">
 </div>

 <div class=" form-group col-md-6">
 <label for="inputEmail4">Start Date</label>
 <input type="date" class="form-control"  placeholder="Start Date">
 </div>

 <div class="form-group col-md-6">
 <label for="inputEmail4">End Date</label>
 <input type="date" class="form-control"  placeholder="End Date">
 </div>

 <div class="form-group col-md-12">
 <label for="inputEmail4">Description</label>
 <textarea type="date" class="form-control"  placeholder="Enter Description"></textarea>
 </div>

<input type="submit" name="submit" value="submit" class="btn btn-success"/>
</div>
</form>
</div>
@endsection