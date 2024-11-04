@extends('layout.default')
@section('content')
<div class="page-container mt-5">

<div class="card">
  <div class="card-header" style="background-color:white;">
    <a href="{{route('create.holiday.page')}}" class="btn btn-primary">Add Holiday +</a>
  </div>
</div>


<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
              {{--  <th>Type</th> --}}
                <th>StartDate</th>
                <th>EndDate</th>
                <th>TotalDays</th>
                <th>Remarks</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

        @if(isset($data))
        @foreach($data as $dd)
            <tr>
                <td>{{$dd?$dd->title:''}}</td>
                <td>{{$dd?$dd->start_date:''}}</td>
                <td>{{$dd?$dd->end_date:''}}</td>
                <td>{{$dd?$dd->days:''}}</td>
                <td>{{$dd?$dd->description:''}}</td>
                <td>
                    <span class="btn btn-success">Approved</span>
                </td>
            </tr>
            
            @endforeach
            @endif
    </table>
</div>
@endsection