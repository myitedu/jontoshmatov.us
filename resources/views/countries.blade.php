<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/countries.css">
</head>
<body>
<table class="table table-bordered">
    <tr>
        <th>Code</th>
        <th>Name</th>
    </tr>
    @foreach($countries as $code=>$country)
        <tr>
            <td>{{$code}}</td>
            <td>{{$country}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
