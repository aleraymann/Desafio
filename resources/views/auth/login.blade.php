@extends('layouts.app')

@section('content')
<div class="mb-3 text-center" id="app">
    <a class="btn btn-light" href="#login-show" id="shake" role="button">
        <h4>let's get in?</h4>
        <h6>Click for Login</h6>
    </a>
</div>
<div class="text-center">
    <h1>Let's come from the idea that work and hobby might be the same.</h1>
    <h5>Just love what you do to never hate another Monday.</h5>
    <h5>Today, we have professionals dedicated to doing what they like best =)</h5>
</div>
<div class="container">
    <div class="mb-3 text-center" id="homecard">
        <div class="card-body">
            <img src="/img/idea.png">
            <h5 class="card-text"><strong>Design</strong></h5>
            <h6 class="card-text">
                We design beautiful and responsive applications with a focus on content
                and great user experience. We work with the latest technologies to make
                your system work on many different devices, such as tablets and smartphones.
            </h6>
        </div>
    </div>
    <div class="mb-3 text-center" id="homecard">
        <div class="card-body">
            <img src="/img/teclado.png">
            <h5 class="card-text"><strong>Research</strong></h5>
            <h6 class="card-text">
                After conducting intensive market research, the final product should contain properties
                such as simplicity, stability, regularity, symmetry, unity and conciseness that result
                in profitability.
            </h6>
        </div>
    </div>
    <div class="mb-3 text-center" id="homecard">
        <div class="card-body">
            <img src="/img/code.png">
            <h5 class="card-text"><strong>Technology</strong></h5>
            <h6 class="card-text">
                Development of your company's digital presence according to global and specific
                needs, using state-of-the-art technologies, with fast updating and easy access,
                we guarantee state-of-the-art systems with high security and technology.
            </h6>
        </div>
    </div>
    <div class="mb-3 text-center" id="homecard">
        <div class="card-body">
            <img src="/img/ux.png">
            <h5 class="card-text"><strong>User Experience</strong></h5>
            <h6 class="card-text">
                Our main concern in a system is that the user has an immersive experience.
                Therefore, we take special care when thinking about the flow of the system,
                ensuring that it works the best way for its user.
            </h6>
        </div>
    </div>
    <div class="container">
        <div class="mb-3 text-center" id="homecard">
            <div class="card-body">
                <h5 class="card-text"><strong>Mission</strong></h5>
                <h6 class="card-text">
                    To exceed the expectation of customers, generating value for their technologies
                    employed, as well as for our company, through an ethical stance, differentiated
                    by innovation, excellence and service rendering services.
                </h6>
            </div>
        </div>
        <div class="mb-3 text-center" id="homecard">
            <div class="card-body">
                <h5 class="card-text"><strong>Mission</strong></h5>
                <h6 class="card-text">
                    To exceed the expectation of customers, generating value for their technologies
                    employed, as well as for our company, through an ethical stance, differentiated
                    by innovation, excellence and service rendering services.
                </h6>
            </div>
        </div>
        <div class="mb-3 text-center" id="homecard">
            <div class="card-body">
                <h5 class="card-text"><strong>View</strong></h5>
                <h6 class="card-text">
                    To be a market reference within the scope of software development,
                    for the expertise, creativity and capacity to generate solutions
                    and services for its clients.
                </h6>
            </div>
        </div>
        <div class="mb-3 text-center" id="homecard">
            <div class="card-body">
                <h5 class="card-text"><strong>Values</strong></h5>
                <h6 class="card-text">
                    <ol>
                        <li>
                            INTEGRITY - Ethics, consistency and transparency in everything you do and
                            in relationships within and outside the work environment.
                        </li>
                        <li>
                            PROFESSIONALISM - Commitment to a high standard of quality, seeking innovations
                            and surprising solutions for customers.
                        </li>
                        <li>
                            TEAMWORK - Teamwork is the essence of our success. Learn and share knowledge and
                            resources with others, always seeking the benefit of our clients, staff and society.
                        </li>
                    </ol>
                </h6>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="card login-form" id="login-show">
            <div class="card-body">
                <div class="card-header"><img src="/img/pp.png">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <a href="/" role="button"><img src="/img/out.png"></a>
                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                {{ old('remember') ? 'checked' : '' }}
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            <br><br>
                            <a class="btn btn-outline-danger" href="{{ route('register') }}" role="button"> Do not have
                                account?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.card -->
    </div><!-- /.container -->
    @endsection
