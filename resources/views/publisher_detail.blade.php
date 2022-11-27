@extends('template/app')

@section('body')


<div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 60%;">
        <div class="row g-0">
          <div class="col-md-5">
            <img src="{{asset("/storage/images/$publisher->image")}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h5 class="card-title">{{$publisher->name}}</h5>
              <p class="card-text">{{$publisher->address}}</p>
              <p class="card-text">{{$publisher->phone}}</p>
              <p class="card-text">{{$publisher->email}}</p>
            </div>
          </div>
        </div>
      </div>
</div>

@php
    $books = $publisher->books;
@endphp

<div class="d-flex justify-content-center">
    @foreach ($books as $book)

    <div class="d-flex p-2">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("/storage/images/$book->image")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">
                    by <br/>
                    {{$book->author}}
                </p>
                <a href="/book/{{$book->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
