@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div>
                    <passport-clients></passport-clients>
                </div></br>
                <div>
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                </div></br>
                <div>
                    <passport-authorized-clients></passport-authorized-clients>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
