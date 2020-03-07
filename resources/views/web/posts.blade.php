@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8 ">
            <h1>Lista de Posts</h1>

            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->name }}
                    </div>
                </div>
                <div class="panel-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif
                    {{ $post->excerpt }}
                    <a href="#" class="float-right">Leer mas</a>
                </div>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
@endsection