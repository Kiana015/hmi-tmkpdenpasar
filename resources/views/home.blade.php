@extends('template')
@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Dashboard</h6>
              </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if($dataUser->type == 0)
                    Haloo Calon Kader
                @elseif($dataUser->type == 1)
                    Haloo Kader
                @elseif($dataUser->type == 2)
                    Haloo Ketum
                @elseif($dataUser->type == 3)
                    Haloo Sekum
                @elseif($dataUser->type == 4)
                    Haloo Bendum
                @elseif($dataUser->type == 5)
                    Haloo Kabid
                @endif
            </div>
        </div>
    </div>
</div>
@endsection