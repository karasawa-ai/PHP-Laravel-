{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に''を埋め込む --}}
@section('title', 'My プロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md8 mx-auto">
       <h2>My プロフィール</h2>
     </div>
   </div>
 </div>

@endsection
