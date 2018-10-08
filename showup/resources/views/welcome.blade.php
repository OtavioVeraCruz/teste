@extends('layouts.master')

@section('content')
        <div class="flex-center position-ref full-height div-login">
            <form class="form-login" method="POST" action="{{route('login')}}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-xs-5 col-sm-6 col-md-6">Usuário:</label>
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-xs-5 col-sm-6 col-md-6">Senha:</label>
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="row buttons">
                        <div class="col-xs-7 col-sm-9 col-md-8">
                            <div class="col-xs-6 col-sm-5 col-md-3"><button type="submit" class="btn btn-primary entrar">Entrar</button></div>
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="{{ route('register.artista') }}" class="btn btn-default cadastrar-ini">Cadastrar artista</a></div>
                            <div class="col-xs-6 col-sm-5 col-md-4 ">
                                <a href="{{ route('register.contratante') }}" class="btn btn-default cadastrar-ini">Cadastrar contratante</a></div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
@endsection