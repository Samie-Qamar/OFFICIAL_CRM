@extends('layout.default')

@section('content')
<div class="page-container mt-5">
    <div class="card">
        <div class="card-header" style="background-color:white;">
            <a href="{{ route('create.Leave') }}" class="btn btn-primary">Add Leave +</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <table id="example" class="table table-striped table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total Days</th>
                        <th>Remarks</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($data) && $data->isNotEmpty())
                        @foreach($data as $dd)
                            <tr>
                                <td>{{ $dd->title ?? '' }}</td>
                                <td>{{ $dd->type ?? '' }}</td>
                                <td>{{ $dd->start_date ?? '' }}</td>
                                <td>{{ $dd->end_date ?? '' }}</td>
                                <td>{{ $dd->total_days ?? '' }}</td>
                                <td>{{ $dd->remarks ?? '' }}</td>
                                <td>
                                    <span class="btn btn-success">{{ $dd->status ?? '' }}</span>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center">No data available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
