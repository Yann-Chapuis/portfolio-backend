@extends('layouts.fullLayoutMaster')
{{-- title --}}
@section('title','Login Page')
{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">
@endsection

@section('content')
<!-- login page start -->
<section id="auth-login" class="row flexbox-container">
  <div class="col-xl-3 col-11">
    <div class="card bg-authentication mb-0">
      <div class="row m-0 ">
        <!-- left section-login -->
        <div class="col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
              <div class="card-title">
                <h4 class="text-center mb-2">Administration</h4>
              </div>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="divider">
                  <div class="divider-text text-uppercase text-muted">
                    <small>Se connecter</small>
                  </div>
                </div>
                {{-- form  --}}
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group mb-50">
                    <label class="text-bold-600" for="email">Adresse email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="text-bold-600" for="password">Mot de passe</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Mot de passe">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
                  <button type="submit" class="btn btn-primary glow w-100 position-relative">Se connecter
                    <i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                  </button>
                </form>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- login page ends -->
@endsection
