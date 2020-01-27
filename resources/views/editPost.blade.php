@extends('layouts.app')
<style>
.form {
        margin: 0 auto;
        width: 35%;
    }
</style>

@section('content')
<div class="form">
    <form action="{{ url('editPost') }}" method="POST">
        @csrf
        <input name="author" type="text" value="{{ $author }}">
        <input type="hidden" name="id" value="{{ $id }}">
        <input name="title" type="text" placeholder="Title" value="{{ $title }}"><br>
        <textarea name="content" cols="80" rows="10" placeholder="Content">{{ $content }}
        </textarea><br>
        <input type="submit" value="Edit">
    </form>

</div>

@endsection