@extends('layout.main')

@section('content')
<hr>
<div>
    <form action="{{ route('workers.update', $worker) }}" method="Post">
        @csrf
        @method('Patch')
        <div style="margin-bottom: 15px;">
            <input type="text" name="name" placeholder="name" value="{{ old('name') ?? $worker->name}}">
            @error('name')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <input type="text" name="surname" placeholder="surname" value="{{ old('surname') ?? $worker->surname}}">
            @error('surname')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <input type="email" name="email" placeholder="email" value="{{ old('email') ?? $worker->email}}">
            @error('email')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <input type="number" name="age" placeholder="age" value="{{ old('age') ?? $worker->age}}">
            @error('age')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <textarea name="description" placeholder="description">
                {{ old('description') ?? $worker->description}}
            </textarea>
            @error('description')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <input id="isMariied" type="checkbox" name="is_married" {{$worker->is_married ? ' checked' : ''}}>
            <label for="isMariied">Is married</label>
        </div>
        <div style="margin-bottom: 15px;">
            <input type="submit" value="save">
        </div>
    </form>
</div>
@endsection
