@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row d-flex justify-content-around p-3">
        <div class="card col-md-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Crops</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total crops</h6>
              <p class="card-text">{{$crop??'-'}}</p>
            </div>
          </div>
          <div class="card col-md-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Seeds</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total seeds</h6>
              <p class="card-text">{{$seed??'-'}}</p>
            </div>
          </div>
          <div class="card col-md-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pesticides</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total pesticides</h6>
              <p class="card-text">{{$pesticite??'-'}}</p>
            </div>
          </div>
          <div class="card col-md-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Fertilizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total fertilizer</h6>
              <p class="card-text">{{$fertilizer??'-'}}</p>
            </div>
          </div>
          
    </div>
    {{-- <form action="{{route('admin.db-backup')}}" method="POST">
      {{ csrf_field() }}
      <button >Backup</button>
    </form> --}}
</div>
@endsection
@section('scripts')

@parent

@endsection