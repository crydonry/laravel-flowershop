@extends('layouts.app')

@section('content')

<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Login
                        </h3>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label">E-Mail Address</label>

                                <div class="">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label">Password</label>

                                <div class="">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                                        Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">

            </div>
        </div>
    </div>
</section>

@endsection