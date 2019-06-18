@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Reports</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <a href="/expense_reports/create" class="btn btn-primary">Create a new report</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered">
            <tr class="bg-info">
                <td>#</td>
                <td>Concepto</td>
            
            </tr>
            @foreach ($reports as $report)
            <tr>
                <td>{{$report->id}}</td>
                <td>{{$report->title}}</td>
                <td><a href="/expense_reports/{{ $report->id }}/edit">Editar</a></td>
                <td><a href="/expense_reports/{{ $report->id }}/confirmDelete">Delete</a></td>
            </tr>    
            @endforeach
        </table>
    </div>
</div>
@endsection