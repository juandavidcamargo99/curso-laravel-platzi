@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Send Report</h1>
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
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="add an email" value="{{ old('email') }}">
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
                <button type="submit" class="btn btn-primary">Send mail</button>
            </form>
        </div>
    </div>
</div>
@endsection