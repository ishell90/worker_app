<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Show page
<hr>

<div>Name: {{$worker->name}} </div>
<div>Surname: {{$worker->surname}} </div>
<div>Email: {{$worker->email}} </div>
<div>Age: {{$worker->age}} </div>
<div>description: {{$worker->description}} </div>
<div>is_married: {{$worker->is_married ? 'true' : 'false'}} </div>
<div>
    <a href="{{ route('workers.index') }}">Назад</a>
</div>

</body>
</html>
