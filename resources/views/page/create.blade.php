@extends('layout.posts')

@section('content')

<a href="{{ route('postIndex') }}">BACK</a>
  <div class="create">
    <form method="post" action="{{ route('postStore')}}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="title"> title</label>
        <input type="text" name="title" value="">
      </div>
      <div class="form-group">
        <label for="description"> description</label>
        <input type="text" name="description" value="">
      </div>
      <div class="form-group">
        <label for="author"> author</label>
        <input type="text" name="author" value="">
      </div>

      <button type="submit">Save</button>
    </form>
  </div>
@endsection
