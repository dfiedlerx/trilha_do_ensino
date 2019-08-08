@extends('layouts.app')

@section('content')
    <div class="item-full-absolute-align login-content">

        <div class="login-logo-content text-center">
            <img class="margin-center login-logo" src="/images/logo.png" alt="">
            <div class="clearfix"></div>
        </div>
        <h4 class="fw-300 c-grey-900 text-center mB-20">Entrar</h4>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="text-normal text-dark">Email ou nome de usuário</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="form-text text-danger">
                        <small>{{ $errors->first('email') }}</small>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="text-normal text-dark">Senha</label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="form-text text-danger">
                        <small>{{ $errors->first('password') }}</small>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="remember" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class=" peers peer-greed js-sb ai-c">
                                <span class="peer peer-greed">Lembrar de mim</span>
                            </label>
                        </div>
                    </div>
                    <div class="peer">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
            <div class="peers ai-c jc-sb fxw-nw cointainer-fluid text-center">
                <div class="row w-100 margin-0">
                    <div class="peer col-12 col-xs-12 col-md-6 padding-0">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    </div>
                    <div class="peer col-12 col-xs-12 col-md-6 padding-0">
                        <a href="/register" class="btn btn-link">Fazer inscrição</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
