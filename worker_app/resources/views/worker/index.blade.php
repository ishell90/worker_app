@extends('layout.main')

@section('content')

<div>
    <hr>
    <div>
        <a href="{{ route('workers.create') }}">Создать пользователя</a>
    </div>
    <hr>
    <div>
        Поиск
    </div>
    <div>
        <form action="{{ route('workers.index') }}">
            <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
            <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}">
            <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}">
            <input type="number" name="from" placeholder="от" value="{{request()->get('from')}}">
            <input type="number" name="to" placeholder="до" value="{{request()->get('to')}}">
            <input type="text" name="description" placeholder="description" value="{{request()->get('description')}}">
            <input id="isMarried" type="checkbox" name="is_married" placeholder="name"
                   {{ request()->get('is_married') === 'on' ? 'checked' : '' }}>
            <label for="is_married">Is Married</label>
            <input type="submit">
            <a href="{{ route('workers.index') }}">Сбросить</a>
        </form>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>Name: {{$worker->name}} </div>
        <div>Surname: {{$worker->surname}} </div>
        <div>Email: {{$worker->email}} </div>
        <div>Age: {{$worker->age}} </div>
        <div>description: {{$worker->description}} </div>
        <div>is_married: {{$worker->is_married ? 'true' : 'false'}} </div>
        <div>
            <a href="{{ route('workers.show', $worker) }}">Посмотреть</a>
        </div>
        <div>
            <a href="{{ route('workers.edit', $worker) }}">Редактировать</a>
        </div>
    <div>
        <form action="{{ route('workers.delete', $worker) }}" method="Post">
            @csrf
            @method('Delete')
            <div style="margin-bottom: 15px;"><input type="submit" value="Удалить"></div>
        </form>
    </div>
        <hr>
    @endforeach
    <div class="my-nav">
        {{$workers->withQueryString()->links()}}
    </div>
</div>
@endsection
