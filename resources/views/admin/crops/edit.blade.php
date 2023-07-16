@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.crops.update",$crops->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- <input type="hidden" name="id" value="{{$crops->id}}"> --}}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($crops) ? $crops->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">Price*</label>
                <input type="number" min="1" id="price" name="price" class="form-control" value="{{ old('price', isset($crops) ? $crops->price : '') }}" required>
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Description</label>
                <input type="text" min="1" id="description" name="description" class="form-control" value="{{ old('description', isset($crops) ? $crops->description : '') }}" required>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('uses') ? 'has-error' : '' }}">
                <label for="uses">Use</label>
                <input type="text" min="1" id="uses" name="uses" class="form-control" value="{{ old('uses', isset($crops) ? $crops->uses : '') }}" required>
                @if($errors->has('uses'))
                    <em class="invalid-feedback">
                        {{ $errors->first('uses') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">Image</label>
                <input type="file" min="1" id="image" name="image" class="form-control" value="{{ old('image', isset($crops) ? $crops->image : '') }}" >
                @if($errors->has('image'))
                    <em class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </em>
                @endif
                <img src="{{url('images/'.$crops->image)}}" height="50" width="50">
            </div>
            <div class="form-group {{ $errors->has('filename') ? 'has-error' : '' }}">
                <label for="filename">File</label>
                <input type="file" min="1" id="filename" name="filename" class="form-control" value="{{ old('filename', isset($crops) ? $crops->filename : '') }}" >
                @if($errors->has('filename'))
                    <em class="invalid-feedback">
                        {{ $errors->first('filename') }}
                    </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
  $('input[name="name"]').change(function(e) {
    $.get('{{ route('categories.check_slug') }}', 
      { 'name': $(this).val() }, 
      function( data ) {
        $('input[name="slug"]').val(data.slug);
      }
    );
  });
</script>
@endsection