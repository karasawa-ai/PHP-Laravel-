@extends('layouts.front')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-md8 mx-auto">
    @foreach ($profiles as $profile)
    <div class="row">
      <div class="text col-md-6">
        <div class="name">
        {{ $profile-> name }}
        </div>
        <div class="gender">
        {{ $profile-> gender }}
      </div>
      <div class="hobby">
        {{ $profile->hobby }}
      </div>
      <div class="introduction">
        {{ $profile->introduction }}
         </div>
      </div>
    </div>
@endforeach
  </div>
 </div>
</div>
@endsection
