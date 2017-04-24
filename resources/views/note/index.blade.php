@extends('layouts.layout')

@section('title', 'note')

@section('content')
<h2>notes</h2>
<hr>
@if (empty($notes->toArray()))
    没数据
@endif
<a href="{{ action('NoteController@create') }}">新增</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>标题</td>
        <td>内容</td>
    </tr>
@foreach ($notes as $note)
    <tr>
        <td>{{ $note->id }}</td>
        <td>{{ $note->title }}</td>
        <td>{{ $note->content }}</td>
    </tr>
@endforeach
</table>

@include('layouts.errors')

@endsection
