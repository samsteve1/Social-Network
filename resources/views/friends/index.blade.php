@extends('templates.default')
@section('content')
  <div class="row">
    <div class="col-md-6">
      <h3>Your Friends</h3>
      <!-- List of Friends-->
      @if (!$friends->count())
        <p>You have no friends.</p>
      @else
        @foreach ($friends as $user)
          @include('user/partials/userblock')
        @endforeach
      @endif

    </div>
    <div class="col-md-6">
      <h4>Friend Requests</h4>
      <!-- List of friend requests-->
      @if(!$requests->count())
        <p>You have no friend requests.</p>
      @else
        @foreach ($requests as $user)
          @include('user.partials.userblock')
        @endforeach
      @endif

    </div>

  </div>
@endsection
