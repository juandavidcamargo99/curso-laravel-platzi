@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Reports</h1>
        <table class="table table-hover table-bordered">
            <tr class="bg-info">
                <td>#</td>
                <td>Concepto</td>
            </tr>
            @foreach ($reports as $report)
            <tr>
                <td>{{$report->id}}</td>
                <td>{{$report->title}}</td>
            </tr>    
            @endforeach
            
        </table>
    </div>
</div>
@endsection