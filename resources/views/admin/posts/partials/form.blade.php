{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('category_id', 'Categorias') }}
    {{ From::select('category_id', $categories, null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label ('name', 'Nombre de la entrada ') }}
    {{ From::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label ('slug', 'URL Amigable ') }}
    {{ From::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Imagen')}}
    {{ Form::file('file')}}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado')}}
    <label>
        {{  From::radio('status', 'PUBLISHED')}} Publicado
        {{  From::radio('status', 'DRAFT')}} Borrador
    </label>
</div>
<div class="form-group">
    {{ Form::label('tags', 'Etiquetas')}}
    <div>
        @foreach($tags as $tag)
            <label >
                {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
            </label>
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Extracto')}}
    {{ From::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label ('body', 'Descripcion') }}
    {{ From::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit ('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
   
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js" ></script>
    <script>
       
       $(document).ready(function(){
            $("#name, #slug").stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                }
            });
       });

        CKEDITOR.config.height = 400;
        
        CKEDITOR.config.width = 'auto';

        CKEDITOR.replace('body');

        
    </script>
@endsection