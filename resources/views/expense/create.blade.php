@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">New Expense</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="/expense_reports/{{ $report->id }}" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="shadow p-4 border rounded-sm">
            <form action="/expense_reports/{{ $report->id }}/expenses" method="post">
                @csrf
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" placeholder="add a value" value="{{ old('amount' ) }}">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Create new report</button>
            </form>
        </div>
    </div>
</div>
@endsection