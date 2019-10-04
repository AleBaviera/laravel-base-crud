@extends('layout.posts')

@section('content')

<a href="{{ route('postIndex') }}">BACK</a>
  <div class="create">
    <form method="post" action="{{ route('postUpdate', $post -> id)}}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="title"> title</label>
        <input type="text" name="title" value="{{ $post -> title}}">
      </div>
      <div class="form-group">
        <label for="description"> description</label>
        <input type="text" name="description" value="{{ $post -> description}}">
      </div>
      <div class="form-group">
        <label for="author"> author</label>
        <input type="text" name="author" value="{{ $post -> author}}">
      </div>

      <button type="submit">Save</button>
    </form>
  </div>
@endsection
