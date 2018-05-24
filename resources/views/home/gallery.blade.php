@extends('layouts.main')

@section('content')
  <!--Content-->
  <main>
    <div class="centered">
      <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
    <!--Workshop-->
    <div class="workshop d-flex justify-content-around flex-wrap">
      <h2 class="workshop__title"><a class="light" href="">Наш YouTube канал <i class="fa fa-youtube-play"></i> </a></h2>
      <div class="w-100"></div>
      @foreach($paginatedItems as $image)
        <img alt="" class="workshop__item responsive-img materialboxed" src="{{$image}}" width="400px">
      @endforeach
    </div>
    
    <div class="center">
      {{$paginatedItems->links()}}
    </div>
    <!--End Workshop-->
  </main>
  <!--End Content-->
@endsection