<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Joe Lohr | At Bats</title>
    <style>
        body { font-family: Nunito,system-ui,BlinkMacSystemFont,-apple-system,sans-serif; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1>Kailee's Batting</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>At Bats</th>
                        <th>Batting Average</th>
                        <th>Hits</th>
                        <th>Homeruns</th>
                        <th>Balls</th>
                        <th>Strikes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $ab }}</td>
                        <td>{{ number_format($ba, 3) }}</td>
                        <td>{{ $hits }}</td>
                        <td>{{ $homeruns }}</td>
                        <td>{{ $balls }}</td>
                        <td>{{ $strikes }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            @foreach($atbats as $atbat)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        <div class="card-header">
                            {{ $atbat->date->format('m-d-Y') }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Inning: {{ $atbat->inning }}</li>
                            <li class="list-group-item">Balls: {{ $atbat->balls }}</li>
                            <li class="list-group-item">Strikes: {{ $atbat->strikes }}</li>
                            <li class="list-group-item">Outcome: {{ $atbat->outcome }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>