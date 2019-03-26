@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="/img/pp.png">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state"
                                    value="{{ old('state') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="postalcode"
                                class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>
                            <div class="col-md-6">
                                <input id="postalcode" type="text" class="form-control" name="postalcode"
                                    value="{{ old('postalcode') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"
                                    value="{{ old('address') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>
                            <div class="col-md-2">
                                <input id="number" type="number" class="form-control" name="number"
                                    value="{{ old('number') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complement"
                                class="col-md-4 col-form-label text-md-right">{{ __('Complement') }}</label>
                            <div class="col-md-6">
                                <input id="complement" type="text" class="form-control" name="complement"
                                    value="{{ old('complement') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district"
                                class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district"
                                    value="{{ old('district') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
    var $postalcode = $("#postalcode");
    $postalcode.mask('00000-000', {
        reverse: true
    });
    $("#postalcode").focusout(function() {

        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            dataType: 'json',
            success: function(data) {
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#city").val(data.localidade);
                $("#state").val(data.uf);
                $("#address").val(data.logradouro);
                $("#complement").val(data.complemento);
                $("#number").focus();
            }
        });
    });
});
</script>
@endsection