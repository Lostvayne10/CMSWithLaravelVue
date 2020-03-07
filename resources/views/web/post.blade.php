@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8 offset-lg-2">
            <h1> {{$post->name }}  </h1>

          
                <div class="card card-default">
                    <div class="card-header">
                        Categoria:
                        <a href=" {{ route('category', $post->category->slug) }} "> {{ $post->category->name }} </a>
                    </div>
               
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" class="img-fluid" alt="Responsive image">
                        @endif
                        {{ $post->excerpt }}
                       <hr>
                       {!! $post->body !!}
                       <hr>
                       Etiquetas:
                       @foreach($post->tags as $tag)
                        <a href=" {{ route('tag', $tag->slug) }} ">{{ $tag->name }}</a>
                       @endforeach
                    </div>
                </div>
                <hr>
           
        </div>
    </div>
@endsection