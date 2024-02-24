@extends('layout.default')
@section('content')
<div class="container mt-5">
<div class="card">
  <div class="card-header" style="background-color:white;">
    <a href="{{route('create.Leave')}}" class="btn btn-primary">Add Leave +</a>
  </div>
</div>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
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
                <td>{{$dd?$dd->type:''}}</td>
                <td>{{$dd?$dd->start_date:''}}</td>
                <td>{{$dd?$dd->end_date:''}}</td>
                <td>{{$dd?$dd->total_days:''}}</td>
                <td>{{$dd?$dd->remarks:''}}</td>
                <td>
                    <span class="btn btn-success">{{$dd?$dd->status:''}}</span>
                </td>
            </tr>
            
            @endforeach
            @endif
    </table>
</div>
@endsection