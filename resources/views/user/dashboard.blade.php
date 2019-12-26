@extends('layouts.app')

@section('content')
<section class="bg0 p-t-250 p-b-120">
    <div class="container">
        <div class="row">
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

                        You are logged in! as User
                    </div>
                </div>
            </div>

            <div class="col">

            </div>
        </div>
    </div>
</section>

@endsection