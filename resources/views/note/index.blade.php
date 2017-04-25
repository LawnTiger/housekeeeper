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
        <td>{{ $note->title }}</td>
        <td>{{ $note->content }}</td>
        <td>{{ $note->created_at }}</td>
        <td><a href="{{ action('NoteController@edit', [$note->id]) }}">编辑</a></td>
        <td>
            <form action="{{ action('NoteController@destroy', [$note->id]) }}" method="post" id="form">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                {{--<a href="javascript:document.form.submit();">删除</a>--}}
                <input type="submit" value="删除">
            </form>
        </td>
    </tr>
@endforeach
</table>

@include('layouts.errors')

@endsection
