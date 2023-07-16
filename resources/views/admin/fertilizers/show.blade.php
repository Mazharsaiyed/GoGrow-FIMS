@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Fertilizer
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.id') }}
                        </th>
                        <td>
                            {{ $fertilizer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.name') }}
                        </th>
                        <td>
                            {{ $fertilizer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Price
                        </th>
                        <td>
                            {{ $fertilizer->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Company
                        </th>
                        <td>
                            {{ $fertilizer->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Uses
                        </th>
                        <td>
                            {{ $fertilizer->uses }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Image
                        </th>
                        <td>
                            <img src="{{url('fertilizer/'.$fertilizer->image)}}" height="50" width="50">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            File
                        </th>
                        <td>
                            {{ $fertilizer->filename }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection