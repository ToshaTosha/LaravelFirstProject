@extends('layout')
@section('content')

@if (session('message'))
    <div style='color: green; margin-bottom: 10px;'>
        {{ session('message') }}
    </div>
@endif

<div class="container-md">
<form method="post" action="/create">
    @csrf

<div class="form-group">
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
    @error('name')
    <div style="color: red; font-size: 14px">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="lastname">Фамилия</label>
    <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}">
    @error('lastname')
    <div style="color: red; font-size: 14px">{{$message}}</div>
    @enderror
</div>
<br>
    <button type="submit" class="btn btn-primary" name="button">Отправить</button>
</form>
</div>

@endsection