@extends('layouts.main')
@section('content')
  <br><br><br><br>
  <div class="container">
    <div class="row">
      @foreach($teams as $team)
        <div class="col-sm-4 item-box">
          <div class="center-cahar">
            <h5 class="item-box__title">{{$team->name}} {{$team->secondName}}</h5>
            <div class="item-box__img">
              <img class="responsive-img" width="240" height="200" src="{{$team->profile}}" data-aos="fade-left">
            </div>
            <p class="item-box__body">
              Lorem ipsum dolor sit amet.
            </p>
            <div class="item-box__more">
              <a class="item-box__link" href="/team/{{$team->id}}">Подробнее</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection