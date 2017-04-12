@extends('layout.client.masterLayout')

@section('content')


    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Hoàng Trần Khôi Nguyên <small>htknguyen.com</small></h1>

        <!-- Blog Post -->
    <?php foreach ($posts as $post): ?>
      <div class="card mb-4">
          <img class="card-img-top img-fluid" src="{{$post->image}}" width="750" alt="Card image cap">
          <div class="card-block">
              <h2 class="card-title">{{$post->title}}</h2>
              <p class="card-text">
                {{$post->summary}}
              </p>
              <a href="chitiet/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
              Posted on {{$post->created_at}} in <a href="#">{{$post->Categories->name}}</a>
          </div>
      </div>

    <?php endforeach; ?>
        <!-- Pagination -->
        <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item"><a class="page-link" href="#">&larr; Older</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
        </ul> -->
    </div>
<!-- /.row --><!-- /.row -->
@endsection
