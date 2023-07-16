@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{isset($fertilizer)?'Update':'Create'}} fertilizer
    </div>

    <div class="card-body">
        <form action="{{ route("admin.fertilizers.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{isset($fertilizer)?$fertilizer->id:''}}">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.category.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($fertilizer) ? $fertilizer->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="name">Price*</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($fertilizer) ? $fertilizer->price : '') }}" required>
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                <label for="name">company*</label>
                <input type="text" id="company" name="company" class="form-control" value="{{ old('company', isset($fertilizer) ? $fertilizer->company : '') }}" required>
                @if($errors->has('company'))
                    <em class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('uses') ? 'has-error' : '' }}">
                <label for="name">Uses*</label>
                <input type="text" id="uses" name="uses" class="form-control" value="{{ old('uses', isset($fertilizer) ? $fertilizer->uses : '') }}" required>
                @if($errors->has('uses'))
                    <em class="invalid-feedback">
                        {{ $errors->first('uses') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="name">Image*</label>
                <input type="file" id="image" name="image" class="form-control" value="{{ old('image', isset($fertilizer) ? $fertilizer->image : '') }}" >
                @if($errors->has('image'))
                    <em class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.name_helper') }}
                </p>
                @isset($fertilizer->image)
                <img src="{{url('fertilizer/'.$fertilizer->image)}}" height="50" width="50">
                @endisset
            </div>
            <div class="form-group {{ $errors->has('filename') ? 'has-error' : '' }}">
                <label for="slug">Filename*</label>
                <input type="file" id="filename" name="filename" class="form-control" value="{{ old('filename', isset($fertilizer) ? $fertilizer->filename : '') }}">
                @if($errors->has('filename'))
                    <em class="invalid-feedback">
                        {{ $errors->first('filename') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.category.fields.slug_helper') }}
                </p>
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