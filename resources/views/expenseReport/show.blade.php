@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Report {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
            <a href="/expense_reports/{{ $report->id }}/confirmSendMail" class="btn btn-info">Send Email</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="shadow p-4 border rounded-sm">
            <h2 class="text-center p-4">Detalles</h1>
            <table class="table table-hover">
                <tr>
                    <th>Descripcion</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                </tr>
                @foreach ($report->expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="/expense_reports/{{ $report->id }}/expenses/create" class="btn btn-primary">New expense</a>
    </div>
</div>
@endsection