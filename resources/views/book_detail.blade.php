@extends('template/app')

@section('body')

<div class = "d-flex justify-content-center">
    <div class="card my-3" style="max-width: 80%;">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="{{asset("storage/images/$book->image")}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h3 class="card-title"> {{$book->title}}</h3>
              <p class="card-text">Penulis  : {{$book->author}}</p>
              <p class="card-text">Tahun     : {{$book->year}}</p>
              <p class="card-text">Penerbit : {{$book->publisher->name}}</p>
              <p class="card-text">Sysnopsis    :{{$book->synopsis}}</p>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
