@extends('layout.posts')

@section('content')
<a href="{{route('postIndex')}}">BACK</a>

  <div class="box">
    <p>{{$post -> title}}</p>
    <p>{{$post -> description}}</p>
    <p>{{$post -> author}}</p>

  </div>
    <div class="">
      <h1> VIEW COMMENTS</h1>

      <?php foreach ($post-> comments as $comment): ?>
        <div class="box">
          <p>{{$comment->author}}</p>
          <p>{{$comment->text}}</p>
        </div>

      <?php endforeach; ?>
    </div>
@endsection
