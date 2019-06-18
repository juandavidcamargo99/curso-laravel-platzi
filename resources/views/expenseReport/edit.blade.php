@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Edit Report {{$report->title}}</h1>
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
            <form action="/expense_reports/{{ $report->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="add a title" value="{{ old('title', $report->title) }}">
                </div>
                <button type="submit" class="btn btn-primary">Create new report</button>
            </form>
        </div>
    </div>
</div>
@endsection