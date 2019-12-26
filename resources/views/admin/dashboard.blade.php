@extends('layouts.app')

@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('http://localhost/flower/public/images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Dashboard
    </h2>
</section>

<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in! as admin
                        <a type="button" href="{{ url('/flowers') }}" class="btn btn-primary">Flower</a>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</section>

@endsection