@extends('layouts.app')
@section('add_head')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
    selector: '#mytextarea'
    });
    </script>
@endsection
@section('content')
    <body>
    <form method="post">
        <textarea id="mytextarea" placeholder="入力してください"></textarea>
    </form>
    </body>
@endsection

