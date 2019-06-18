<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reports</title>
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>