@extends('layouts.app')

@section('content')
<div class="container">
    <div id="fh5co-portfolio">
        <div class="row">
            <div class="col-md-4 image-content">
                <img src="{{asset('storage/images/backgrounds/LogoRono.png')}}" alt="" style="width:80%;">
            </div>
            <div class="col-md-8 sticky-parent">
                <div class="detail" id="sticky_item">
                    <div class="animate-box card">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror mb-3" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection