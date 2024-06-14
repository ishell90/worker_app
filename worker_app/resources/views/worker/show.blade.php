@extends('layout.main')

@section('content')
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

@endsection
