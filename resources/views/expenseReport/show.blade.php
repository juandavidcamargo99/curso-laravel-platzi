@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Report {{$report->title}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="shadow p-4 border rounded-sm">
            
        </div>
    </div>
</div>
@endsection