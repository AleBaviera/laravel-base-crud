@extends('layout.posts')

@section('content')
<a href="{{route('postCreate')}}">ADD</a>
<?php foreach ($posts as $post): ?>
  <div class="box">
    <p>{{$post -> title}}</p>
    <p>{{$post -> description}}</p>
    <p>{{$post -> author}}</p>
    <a href="{{route('postEdit', $post -> id)}}">UPDATE</a>
    <a href="{{route('postDelete', $post -> id)}}">DELETE</a>
  </div>
<?php endforeach; ?>

@endsection
