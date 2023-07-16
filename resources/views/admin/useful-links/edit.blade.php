@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Link
    </div>

    <div class="card-body">
        <form action="{{ route("admin.useful-links.update", [$useful_links->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($useful_links) ? $useful_links->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                <label for="link">{{ trans('cruds.user.fields.email') }}*</label>
                <input type="url" id="link" name="link" class="form-control" value="{{ old('link', isset($useful_links) ? $useful_links->link : '') }}" required>
                @if($errors->has('link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Description*</label>
                <textarea name="description" class="form-control">{{ old('description', isset($useful_links) ? $useful_links->description : '') }}</textarea
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection