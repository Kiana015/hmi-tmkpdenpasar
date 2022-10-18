@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
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
</div>
@endsection