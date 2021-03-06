@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>Lista de Articulos</h1>

            @foreach($posts as $post)
                <div class="card card-default">
                    <div class="card-header">
                        {{ $post->name }}
                    </div>
               
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" class="img-fluid" alt="Responsive image">
                        @endif
                        {{ $post->excerpt }}
                        <a href=" {{ route('post', $post->slug) }}"  class="float-right">Leer mas</a>
                    </div>
                </div>
                <hr>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
@endsection