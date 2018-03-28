@extends('templates.default')
@section('content')
  <h3>Sign in</h3>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="form-vertical" action="{{ route('auth.signin') }}" method="post" role="form">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="control-label">Email</label>
          <input type="email" name="email" id="email" class="form-control">
          @if ($errors->has('email'))
            <span class="help-block">
              {{ $errors->first('email') }}
            </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="control-label">Password</label>
          <input type="password" name="password" id="password" class="form-control">
          @if ($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }} </span>
          @endif
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember">Remeber me
          </label>
        </div>
        <div class="form-group">
          <button type="submit"class="btn btn-default">Sign in</button>
        </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>

  </div>

@endsection
