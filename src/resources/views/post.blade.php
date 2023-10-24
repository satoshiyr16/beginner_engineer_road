@extends('layouts.app')
@section('additionHeader')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('js/post.js') }}" type="module"></script>
@endsection
@section('content')
    <body>
    <form method="post" action="/post">
        @csrf
        <textarea id="mytextarea" placeholder="入力してください" name="content"></textarea>
        <button type="submit">Submit</button>
    </form>
    </body>
@endsection

