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
        <td>时间</td>
        <td></td>
        <td></td>
    </tr>
@foreach ($notes as $note)
    <tr>
        <td>{{ $note->id }}</td>
        <td><a href="{{ action('NoteController@show', [$note->id]) }}">{{ $note->title }}</a></td>
        <td>{!! $note->content !!}</td>
        <td>{{ $note->created_at }}</td>
        <td><a href="{{ action('NoteController@edit', [$note->id]) }}">编辑</a></td>
        <td>
            <a href="javascript:ajaxDelete('{{ action('NoteController@destroy', $note->id) }}');">删除</a>
        </td>
    </tr>
@endforeach
</table>

@endsection
