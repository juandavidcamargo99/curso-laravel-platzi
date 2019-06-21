<div class="row">
    <div class="col-md-12">
        <h1>Expense Report {{ $report->id }} : {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Expenses</h2>
        <table class="table">
            <tr>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>
            @foreach ($report->expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->created_at }}</td>
                    <td>{{ $expense->amount }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>