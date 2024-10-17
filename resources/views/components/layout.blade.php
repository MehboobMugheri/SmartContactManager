<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Contact Manager</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-2 bg-info mt-3">
                <a href="" class="btn btn-primary mt-3">Home</a>
            </div> --}}
            <div class="col-md-10 text-center bg-info mt-3">
                <h1>Smart Contact Manager</h1>
                <h2>{{ $tittle ?? "Smart Contact Manager"}}</h2>
                
            </div>
            </div>
        <div class="row">
            {{-- <div class="col-md-2 bg-info">
                <a href="" class="btn btn-primary">Home</a>
            </div> --}}
            <div class="col-md-10 mt-3">
                
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-2 bg-info">
                <a href="" class="btn btn-primary">Home</a>
            </div> --}}
            <div class="col-md-10 mt-3">

                {{ $slot }}
                
            </div>
        </div>
    </div>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>