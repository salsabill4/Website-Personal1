@extends('main')

@section('content')

  <div class="container">
    <div class="mx-5 my-5">
      <div class="text-center">
        <h1 class="fw-bold mb-5">{{ $post["title2"] }}</h1>
        <h6 class="text-muted text-uppercase fw-bolder mt-5">{{ $post["date"] }}</h6>
      </div>
      <div class="d-flex justify-content-center align-items-center my-5">
        <img 
        src="img/{{ $post["image"] }}" 
        alt="{{ $post["slug"] }}" 
        class="img-fluid rounded"
        />
      </div>
      <p>{{ $post["body"] }}</p>
    </div>
  </div>


  <div class="container">
    <div class="my-5">
      <a href="/news" class="fs-6 fw-medium " id="back-form"><i class="fa-solid fa-arrow-left"></i>  Kembali ke News</a>
    </div>
  </div>

@endsection