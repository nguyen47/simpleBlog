@extends('layout.client.masterLayout')

@section('content')

<!-- Post Content Column -->
<div class="col-lg-8">

  <!-- Title -->
  <h1 class="mt-4">{{$posts->title}}</h1>

  <!-- Author -->
  <p class="lead">
    in <a href="#">{{$posts->Categories->name}}</a>
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Posted on {{$posts->created_at}}</p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="{{$posts->image}}" width="750" alt="">

  <hr>

  {!!$posts->content!!}
  <!-- Comments Form -->

<hr>
  <?php if (Sentinel::check()): ?>
    <div class="card my-4">
      <h5 class="card-header">Leave a Comment:</h5>
      <div class="card-block">
        <form action="chitiet/{{$posts->id}}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="user_id" value="{{Sentinel::getUser()->id}}">
          <input type="hidden" name="status" value="2">
          <input type="hidden" name="posts_id" value="{{$posts->id}}">
          <div class="form-group">
            <textarea class="form-control" rows="3" name="content"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
<?php endif ?>
  <!-- Single Comment -->
    <?php foreach ($comment as $comment): ?>
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">{{$comment->User->email}}</h5>
          {{$comment->content}}
        </div>
      </div>
    <?php endforeach; ?>

</div>

@endsection
