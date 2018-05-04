@extends('layouts.main')

@section('content')
  <br><br><br><br>
  <div class="container">
    <h1>{{$team->name}} {{$team->secondName}}</h1>
    <p>{{$team->text}}</p>

    @foreach($images as $image)
      <img class="responsive-img" width="100%" src="{{asset($image)}}">
    @endforeach

  </div>
@endsection