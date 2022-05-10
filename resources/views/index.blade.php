<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel With Vue Js</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div id="app">
                   <todu-component />
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>