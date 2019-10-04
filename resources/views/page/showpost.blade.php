@extends('layout.posts')

@section('content')
<a href="{{route('postIndex')}}">BACK</a>

  <div class="box">
    <p>{{$post -> title}}</p>
    <p>{{$post -> description}}</p>
    <p>{{$post -> author}}</p>

  </div>


@endsection
